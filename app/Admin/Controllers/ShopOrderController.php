<?php

namespace App\Admin\Controllers;

use DB;
use App\User;
use Carbon\Carbon;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\Models\ShopOrder;
use App\Models\ShopProduct;
use Illuminate\Http\Request;
use App\Models\ShopOrderDetail;
use App\Models\ShopOrderStatus;
use Encore\Admin\Facades\Admin;
use App\Models\ShopOrderHistory;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use App\Admin\Extensions\ExcelExpoter;
use Encore\Admin\Controllers\ModelForm;

class ShopOrderController extends Controller
{
    use ModelForm;
    public $statusPayment, $statusOrder, $statusShipping, $statusOrder2, $statusShipping2;

    public function __construct()
    {
        $this->statusOrder     = ShopOrderStatus::pluck('name', 'id')->all();
        $this->statusOrder2    = ShopOrderStatus::mapValue();
    }

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        $keyword = \Request::input('keyword');
        $keyword = empty($keyword) ? "" : $keyword;
        return Admin::content(function (Content $content) use ($keyword) {

            $content->header('Quản lý đơn hàng');
            if ($keyword != "") {
                $content->description('Tìm kiếm đơn hàng theo từ khóa: "' . $keyword . '"');
            }

            $content->body($this->grid($keyword));
        });
    }

    /**
     * Edit interface.
     *
     * @param $id
     * @return Content
     */
    public function edit($id)
    {
        return Admin::content(function (Content $content) use ($id) {

            $content->header('Chỉnh sửa đơn hàng');
            // $content->description('description');

            $content->body($this->form()->edit($id));
        });
    }

    /**
     * Create interface.
     *
     * @return Content
     */
    public function create()
    {
        return Admin::content(function (Content $content) {

            $content->header('Tạo đơn hàng mới');
            // $content->description('description');

            $content->body($this->form());
        });
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid($keyword)
    {
        return Admin::grid(ShopOrder::class, function (Grid $grid) use ($keyword) {

            // $grid->disableExport();
            $grid->disableFilter();
            $grid->disableColumnSelector();
            // $grid->disableRowSelector();
            $grid->id('ID')->sortable();
            // $grid->email('Email')->display(function ($customer) {
            //     return empty($customer['email']) ? 'N/A' : $customer['email'];
            // });
            $grid->toname('Thông tin')->expand(function () {
                $html = '<br>';
                $html .= '<span style="padding-left:20px;">Người nhận: ' . $this->toname . '</span><br>';
                $html .= '<span style="padding-left:20px;">Địa chỉ: ' . $this->address1 . '</span><br>';
                $html .= '<span style="padding-left:20px;">Số điện thoại: ' . $this->phone . '</span><br>';
                // $html .= '<span style="padding-left:20px;">Email: ' . $this->email . '</span><br>';
                $html .= (!empty($this->comment)) ? '<span style="padding-left:20px;"><span style="color:red;font-weight:bold;">Ghi chú:</span> ' . $this->comment : '';
                return $html . "</span></span><br>";
            }, 'Thông tin nhận hàng');
           
            $grid->total('Tổng giá')->display(function ($price) {
                return number_format($price);
            });
         
            $statusOrder = $this->statusOrder;
            $grid->status('Trạng thái')->display(function ($status) use ($statusOrder) {
                $style = "";
                if ($status == 0) {
                    $style = '';
                } elseif ($status == 1) {
                    $style = 'class="label label-primary"';
                } elseif ($status == 2) {
                    $style = 'class="label label-warning"';
                } elseif ($status == 3) {
                    $style = 'class="label label-danger"';
                } elseif ($status == 4) {
                    $style = 'class="label label-success"';
                }elseif ($status == 5) {
                    $style = 'class="label label-danger"';
                }
                return "<span $style>" . $statusOrder[$status] . "</span>";
            });
            $grid->actions(function ($actions) {
                $actions->disableEdit();
                $actions->disableView();
                // $actions->disableDelete();
                $actions->prepend('<a title="Show Customer detail" href="shop_order_edit/' . $actions->getkey() . '"><i style="font-size:12px;" class="fa fa-edit"></i></a>');
            });

            $grid->column('created_at', 'Ngày tạo')->display(function ($created_at) {
                return date('m:h d-m-Y', strtotime($created_at));
            });
            $grid->model()->orderBy('id', 'desc');
            if ($keyword != "") {
                $grid->model()
                    ->where('toname', 'like', '%' . $keyword . '%')
                    ->orWhere('id', (int) $keyword);
            }
            $grid->exporter(new ExcelExpoter('dataOrder', 'Danh sach order'));
            $grid->disableCreateButton();
            $grid->disableExport();
            // $grid->disableActions();
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        Admin::script($this->jsProcess());
        return Admin::form(ShopOrder::class, function (Form $form) {
            $arrCustomer = array();
            $customers   = User::all();
            foreach ($customers as $key => $value) {
                $arrCustomer[$value['id']] = $value['name'] . "<" . $value['email'] . ">";
            }
            // $form->select('user_id', 'Chọn khách hàng')->options($arrCustomer);
            $form->text('toname', 'Tên khách hàng');
            // $form->text('address1', 'Số nhà, đường');
            // $form->text('address2', 'Quận Huyện');
            $form->mobile('phone', 'Phone');
            $form->textarea('comment', 'Ghi chú')->default('Ăn tại chỗ');
            $form->select('status', 'Trạng thái')->options($this->statusOrder)->default(4);
            $form->disableViewCheck();
            $form->disableEditingCheck();
            $form->disableCreatingCheck();
        });
    }

    public function jsProcess()
    {
        $urlgetInfoUser    = route('getInfoUser');
        $urlgetInfoProduct = route('getInfoProduct');
        return <<<JS
        $('[name="user_id"]').change(function(){
            id = $(this).val();
                $.ajax({
                    url : '$urlgetInfoUser',
                    type : "get",
                    dateType:"application/json; charset=utf-8",
                    data : {
                         id : id
                    },
                    success: function(result){
                        var returnedData = JSON.parse(result);
                        $('[name="toname"]').val(returnedData.name);
                        $('[name="address1"]').val(returnedData.address1);
                        $('[name="address2"]').val(returnedData.address2);
                        $('[name="phone"]').val(returnedData.phone);
                    }
                });
        });

JS;
    }
/**
 * [getInfoUser description]
 * @param  Request $request [description]
 * @return [type]           [description]
 */
    public function getInfoUser(Request $request)
    {
        $id = $request->input('id');
        return User::find($id)->toJson();
    }
/**
 * [getInfoProduct description]
 * @param  Request $request [description]
 * @return [type]           [description]
 */
    public function getInfoProduct(Request $request)
    {
        $id  = $request->input('id');
        $sku = $request->input('sku');
        if ($id) {
            return ShopProduct::find($id)->toJson();
        } else {
            return ShopProduct::where('sku', $sku)->first()->toJson();
        }

    }
/**
 * [detailOrder description]
 * @param  [type] $id [description]
 * @return [type]     [description]
 */
    public function detailOrder($id)
    {
        return Admin::content(function (Content $content) use ($id) {

            $content->header('Order #' . $id);
            // $content->description('description');
            $content->body(
                $this->detailOrderForm($id)
            );
        });
    }

    public function detailOrderForm($id = null)
    {
        $order = ShopOrder::find($id);
        if ($order === null) {
            return 'no data';
        }
        $products = ShopProduct::pluck('name', 'id')->all();
        return view('admin.OrderEdit')->with([
            "order" => $order, "products" => $products, "statusOrder" => $this->statusOrder, "statusPayment" => $this->statusPayment, "statusShipping" => $this->statusShipping, "statusOrder2" => $this->statusOrder2, "statusShipping2" => $this->statusShipping2,
        ])->render();
    }


    public function dataStatis()
    {
        return Admin::content(function (Content $content) {

            $content->header('Thống kê');
            // $content->description('description');
            $content->body(
                $this->dataStatisForm()
            );
        });
    }


    public function dataStatisForm()
    {
        $products = ShopProduct::pluck('name', 'id')->all();
        return view('admin.dataStatis')->render();
    }
    
    public function showDataStatis(Request $request)
    {
        return Admin::content(function (Content $content ) use ($request) {

            $content->header('Thống kê');
            // $content->description('description');
            $content->body(
                $this->showDataStatisForm($request)
            );
        });
    }


    public function showDataStatisForm($request)
    {
        $startDate = Carbon::parse($request->startDate);
        $endDate = Carbon::parse($request->endDate);
        $orders = ShopOrder::whereBetween('created_at', [$startDate, $endDate])->get();
        $orderDetails = $orders->flatMap(function ($order) {
            return $order->details;
        });
        
        $productQuantities = $orderDetails->groupBy('product_id')->map(function ($orderDetails) {
            $product = ShopProduct::find($orderDetails->first()->product_id);
            $quantity = $orderDetails->sum('qty');
            $totalRevenue = $orderDetails->sum('total_price'); 
            return [
                'product' => $product,
                'quantity' => $quantity,
                'totalRevenue' => $totalRevenue,
            ];;
        });

        $sortedProducts = $productQuantities->sortByDesc('quantity');
        
        $topProducts = $sortedProducts->take(5);

        return view('admin.dataStatis')->with(['orders' => $orders, 'topProducts' => $topProducts, ])->render();
    }
/**
 * [postOrderUpdate description]
 * @param  Request $request [description]
 * @return [type]           [description]
 */
public function postOrderUpdate(Request $request)
{
    $id           = $request->input('pk');
    $field        = $request->input('name');
    $value        = $request->input('value');
    
        $arrFields = [
            $field => $value,
        ];
        $order_id = $id;
        ShopOrder::updateInfo($order_id, $arrFields);

        return response(['stt' => 1]);
}

/**
 * [postOrderEdit description]
 * @param  Request $request [description]
 * @return [type]           [description]
 */
    public function postOrderEdit(Request $request)                                                                                                                
    {
        //Add new item
        if ((int) $request->input('addItem-form') != 0) {
            $order_id = (int) $request->input('addItem-form');
            $pQty     = $request->input('pQty');
            // $pAttr    = $request->input('pAttr');
            $pId      = $request->input('pId');
            $pPrice   = $request->input('pPrice');
            $arrData  = array();         
            $listNew  = array();
            foreach ($pId as $key => $value) {
                if ($value['value'] == 0) {
                    continue;
                }

                $product                  = ShopProduct::find($value['value']);
                $listNew[$value['value']] = $product->name;
                $arrData[]                = array(
                    'order_id'    => $order_id,
                    'product_id'  => $value['value'],
                    'name'        => $product->name,
                    'qty'         => (int) $pQty[$key]['value'],
                    // 'option'      => $pAttr[$key]['value'],
                    'price'       => (int) $pPrice[$key]['value'],
                    'total_price' => (int) $pPrice[$key]['value'] * (int) $pQty[$key]['value'],
                    // 'sku'         => $product->sku,
                );
            }
            $rs = (new ShopOrderDetail)->insert($arrData);


            //Update total price
            $total = ShopOrderDetail::select(DB::raw('sum(total_price) as total'))
                ->where('order_id', $order_id)
                ->first()->subtotal;
            //end update total price
            if ($rs && $total === 1) {
                return json_encode(['stt' => 1, 'msg' => '']);
            } else {
                return json_encode(['stt' => 0, 'msg' => 'Error: ' . $total]);
            }
        }
        //end add new item
        //=======================

        //Remove item
        if ($request->input('removeItem-form') == 1) {
            $pId        = (int) $request->input('pId');
            $itemDetail = (new ShopOrderDetail)->where('id', $pId)->first();
            $order_id   = $itemDetail->order_id;
            $product_id = $itemDetail->product_id;
            $qty        = $itemDetail->qty;
            $rs         = $itemDetail->delete(); //Remove item from shop order detail
            //Update total price
            $total = ShopOrderDetail::select(DB::raw('sum(total_price) as total'))
                ->where('order_id', $order_id)
                ->first()->subtotal;
            // $updateSubTotal = ShopOrderTotal::updateSubTotal($order_id, $subtotal);
            $item           = ShopProduct::find($product_id);
            $item->stock    = $item->stock + $qty; // Restore stock
            $item->sold     = $item->sold - $qty; // Subtract sold
            $item->save();

            //Add history

            //end update total price
            if ($rs && $total === 1) {
                return json_encode(['stt' => 1, 'msg' => '']);
            } else {
                return json_encode(['stt' => 0, 'msg' => 'Error: ' . $total]);
            }
        }
        //end remove Item

        //Edit item
        if ($request->input('editItem-form') != 0) {
            $pId      = (int) $request->input('pId');
            $pQty     = (int) $request->input('pQty');
            $pPrice   = (int) $request->input('pPrice');
            $pName    = $request->input('pName');
            $pAttr    = $request->input('pAttr');
            $order_id = (int) $request->input('editItem-form');
            $data     = array(
                'qty'         => $pQty,
                'price'       => $pPrice,
                'name'        => $pName,
                'total_price' => $pQty * $pPrice,
                'option'      => $pAttr,
            );
            $rs = (new ShopOrderDetail)->updateDetail($pId, $data);


            //end update total price
            if ($rs && $rs === 1) {
                return json_encode(['stt' => 1, 'msg' => '']);
            } else {
                return json_encode(['stt' => 0, 'msg' => 'Error: ' . $rs]);
            }
        }
        //End edit item

    }
    public function show($id)
    {
        return Admin::content(function (Content $content) use ($id) {
            $content->header('');
            $content->description('');
            $content->body(Admin::show(ShopOrder::findOrFail($id), function (Show $show) {
                $show->id('ID');
            }));
        });
    }
}
