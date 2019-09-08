<?php

namespace App\Admin\Controllers;


use App\Admin\Contracts\GoodsContract;
use App\Admin\Contracts\LabelContract;
use App\Models\Goods;
use App\Models\GoodsCategory;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class GoodsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '商品';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Goods);
        $grid->column('display_order', __('Display order'))->editable()->sortable()->width(80);
        $grid->column('title', __('Title'))->editable()->width(200);
        $grid->column('thumb', __('Thumb'))->display(function ($image) {
            $imageUrl = $image ? env('APP_UPLOAD_PATH') . $image : "https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=188149577,2949073731&fm=26&gp=0.jpg";
            return "<img class='img img-thumbnail' style='max-width: 50px;max-height:50px' src='{$imageUrl}'>";
        });

        $grid->column('price', __('Price'))->editable();
        $grid->column('stock', __('Stock'))->editable();
        $grid->column('sales', __('Sales'))->sortable()->width(100);
        $grid->column('real_sales', __('Real sales'))->sortable()->help('不包含已维权订单')->width(150);
        $grid->column('tags', __('Tags'))->pluck('title','id')->label();

        $grid->column('category_id', __('Category id'))->display(function ($categoryId) {
            return GoodsCategory::find($categoryId)->title ?? null;
        });

        $grid->column('status', __('Status'))->using(GoodsContract::COMMON_STATUS)->label(LabelContract::COMMON_STYLE);
        $grid->column('created_at')->filter('range', 'date');
        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Goods::findOrFail($id));

        $show->field('display_order', __('Display order'));
        $show->field('sub_title', __('Sub title'));
        $show->field('stock', __('Stock'));
        $show->field('thumb', __('Thumb'));
        $show->field('max_price', __('Max price'));
        $show->field('min_price', __('Min price'));
        $show->field('real_price', __('Real price'));
        $show->field('price', __('Price'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('tag_id', __('Tag id'));
        $show->field('group_id', __('Group id'));
        $show->field('category_id', __('Category id'));
        $show->field('status', __('Status'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Goods);

        $form->number('price', __('Price'));

        return $form;
    }


}
