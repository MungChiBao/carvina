<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ShopCategory;
use Encore\Admin\Controllers\ModelForm;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class ShopCategoryController extends Controller
{
    use ModelForm;

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('Danh mục sản phẩm');
            // $content->description('description');

            $content->body($this->grid());
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

            $content->header('Chỉnh sửa danh mục sản phẩm');
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

            $content->header('Tạo mới danh mục sản phẩm');
            // $content->description('description');

            $content->body($this->form());
        });
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Admin::grid(ShopCategory::class, function (Grid $grid) {

            $grid->id('ID')->sortable();
            $grid->image('Hình ảnh')->image();
            $grid->name('Tên')->sortable();
            $grid->parent('Danh mục cha')->display(function ($parent) {
                return (ShopCategory::find($parent)) ? ShopCategory::find($parent)->name : '';
            });
            $grid->status('Trạng thái')->switch();
            $grid->hot('Nổi bật')->switch();
            $grid->sort('Sắp xếp')->editable();
            $grid->disableExport();
            $grid->tools(function ($tools) {
                $tools->batch(function ($batch) {
                    $batch->disableDelete();
                });
            });
            $grid->actions(function ($actions) {
                $actions->disableView();
                // $actions->disableDelete();
                // $actions->disableEdit();
            });
            $grid->disableFilter();
            $grid->disableColumnSelector();
            $grid->disableRowSelector();
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(ShopCategory::class, function (Form $form) {

            $form->display('id', 'ID');
            $form->text('name', 'Tên')->rules('required', ['required' => 'Bạn chưa nhập tên']);
            $form->ckeditor('description', 'Mô tả')->rules('max:1000', ['max' => 'Tối đa 1000 kí tự']);
            // $form->text('name_en', 'Tên tiếng anh');
            $arrCate = (new ShopCategory)->listCate();
            $arrCate = ['0' => '== Danh mục gốc =='] + $arrCate;
            // dd($arrCate);
            $form->select('parent', 'Danh mục cha')->options($arrCate);
            $form->image('image', 'Hình ảnh')->uniqueName()->move('category')->removable();
            $form->text('slug', 'Tên URL');

            // $form->text('uniquekey', 'Unique Key')->rules(function ($form) {
            //     return 'required|unique:shop_category,uniquekey,' . $form->model()->id . ',id';
            // }, ['required' => 'Bạn chưa nhập mã danh mục', 'unique' => 'Mã danh mục này đã có rồi'])->placeholder('Ví dụ: thoi-trang, thoi-trang-cho-nam,...')->help('Viết liền, không dấu, không được trùng nhau.');
            $form->number('sort', 'Sắp xếp')->default(1);
            $form->switch('status', 'Trạng thái');
            $form->switch('hot', 'Nổi bật');
            // $form->divide('Hỗ trợ SEO');
            $form->html('<b>Hỗ trợ SEO</b>');
            $form->text('name_en', 'Tiêu đề SEO')->rules('required', ['required' => 'Bạn chưa nhập tiêu đề SEO']);
            $form->tags('keyword', 'Từ khóa');
            $form->textarea('seo_description', 'Mô tả')->rules('max:1000', ['max' => 'Tối đa 1000 kí tự']);
            $form->disableViewCheck();
            $form->disableEditingCheck();
            $form->disableCreatingCheck();
            // $form->display('created_at', 'Created At');
            // $form->display('updated_at', 'Updated At');
            // $form->saved(function (Form $form) {
            //     $file_path_admin = config('filesystems.disks.admin.root');
            //     try {
            //         if (!file_exists($file_path_admin . '/thumb/' . $form->model()->image)) {
            //             \Image::make($file_path_admin . '/' . $form->model()->image)->insert(public_path('watermark.png'), 'bottom-right', 10, 10)->save($file_path_admin . '/' . $form->model()->image);
            //             //thumbnail
            //             $image_thumb = \Image::make($file_path_admin . '/' . $form->model()->image);
            //             $image_thumb->resize(200, null, function ($constraint) {
            //                 $constraint->aspectRatio();
            //             });
            //             $image_thumb->save($file_path_admin . '/thumb/' . $form->model()->image);
            //             //end thumb
            //         }

            //     } catch (\Exception $e) {
            //         echo $e->getMessage();
            //     }

            // });
        });
    }

    public function show($id)
    {
        return Admin::content(function (Content $content) use ($id) {
            $content->header('');
            $content->description('');
            $content->body(Admin::show(ShopCategory::findOrFail($id), function (Show $show) {
                $show->id('ID');
            }));
        });
    }
}
