<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CmsCategory;
use App\Models\CmsContent;
use Encore\Admin\Controllers\ModelForm;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class CmsContentController extends Controller
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

            $content->header('Quản lý bài viết');
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

            $content->header('Chỉnh sửa bài viết');
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

            $content->header('Đăng bài viết mới');
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
            $grid = new Grid(new CmsContent());

            $grid->id('ID')->sortable();
            $grid->quickSearch('title');
            
            $grid->title('Tên bài viết')->sortable();
            $grid->image('Hình ảnh')->image();
            $grid->category('Chủ đề')->display(function ($cate) {
                if (!$cate){
                    return "";
                }
                return $cate['title'];
            });
            $grid->status('Trạng thái')->switch();
            $grid->keyword('Từ khóa');

            $grid->created_at('Ngày tạo');
            // $grid->updated_at('Lần cuối chỉnh sửa');
            $grid->disableExport();
            $grid->disableFilter();
            $grid->disableColumnSelector();
            $grid->disableRowSelector();
            $grid->model()->orderBy('id', 'desc');
            $grid->actions(function ($actions) {
                $actions->disableView();
                // $actions->disableDelete();
                // $actions->disableEdit();
            });

            return $grid;

    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(CmsContent::class, function (Form $form) {
            $form->text('title', 'Tên bài viết')->rules('required', ['required' => 'Bạn chưa nhập tên']);
            $form->textarea('description', 'Mô tả')->rules('max:1000', ['max' => 'Tối đa 1000 kí tự']);
            // $form->text('title_en', 'Tên bài viết (Tiếng Anh)');
            $arrCate = (new CmsCategory)->listCate();
            $form->select('category_id', 'Danh mục')->options($arrCate)->rules('required');
            $form->image('image', 'Hình ảnh')->uniqueName()->move('cms_content')->removable();
            $form->text('slug', 'Đường dẫn url');
            $form->ckeditor('content', 'Nội dung')->required();
            // $form->ckeditor('content_en', 'Nội dung (Tiếng Anh)');
            $form->switch('status', 'Trạng thái');
            $form->number('sort', 'Sắp xếp')->default('1');
            // $form->hasMany('images', 'Hình ảnh phụ', function (Form\NestedForm $form) {
            //     $form->image('image', 'Hình ảnh nhỏ')->uniqueName()->removable();
            // });
            // $form->divide('Hỗ trợ SEO');
           
            $form->disableViewCheck();
            $form->disableEditingCheck();
            $form->disableCreatingCheck();

            $form->saved(function (Form $form) {
                $file_path_admin = config('filesystems.disks.admin.root');
                $id              = $form->model()->id;
                $content         = CmsContent::find($id);
                try {
                    if (!file_exists($file_path_admin . '/thumb/' . $content->image)) {
                        \Image::make($file_path_admin . '/' . $content->image)->insert(public_path('watermark.png'), 'bottom-right', 10, 10)->save($file_path_admin . '/' . $content->image);
                        //thumbnail
                        $image_thumb = \Image::make($file_path_admin . '/' . $content->image);
                        $image_thumb->resize(200, null, function ($constraint) {
                            $constraint->aspectRatio();
                        });
                        $image_thumb->save($file_path_admin . '/thumb/' . $content->image);
                        //end thumb
                    }
                    if (count($content->images)) {
                        foreach ($content->images as $key => $image) {
                            if (!file_exists($file_path_admin . '/thumb/' . $image->image)) {
                                \Image::make($file_path_admin . '/' . $image->image)->insert(public_path('watermark.png'), 'bottom-right', 10, 10)->save($file_path_admin . '/' . $image->image);
                                //thumbnail
                                $image_thumb = \Image::make($file_path_admin . '/' . $image->image);
                                $image_thumb->resize(200, null, function ($constraint) {
                                    $constraint->aspectRatio();
                                });
                                $image_thumb->save($file_path_admin . '/thumb/' . $image->image);
                                //end thumb
                            }
                        }
                    }

                } catch (\Exception $e) {
                    echo $e->getMessage();
                }

            });
        });
    }

    public function show($id)
    {
        return Admin::content(function (Content $content) use ($id) {
            $content->header('');
            $content->description('');
            $content->body(Admin::show(CmsContent::findOrFail($id), function (Show $show) {
                $show->id('ID');
            }));
        });
    }
}
