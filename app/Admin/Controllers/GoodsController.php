<?php

namespace App\Admin\Controllers;

use App\Models\Goods;
use App\Models\GoodsTag;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Support\MessageBag;
use Tests\Models\Tag;

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

        $grid->column('display_order', __('Display order'))->editable()->sortable();
        $grid->column('title', __('Title'))->editable()->setAttributes(['text-decoration'=>'none']);
        $grid->column('thumb', __('Thumb'))->image(env('APP_UPLOAD_PATH'), 50, 50);
        $grid->column('tag_id', __('Tag id'))->display(function ($tagId) {
            return GoodsTag::find($tagId)->title ?? null;
        })->label();
        $grid->column('stock', __('Stock'))->editable();
        $grid->column('price', __('Max price'))->display(function () {
            return "{$this->min_price} ~ {$this->max_price}";
        });
        $grid->column('real_price', __('Real price'));
        $grid->column('price', __('Price'));
        $grid->column('group_id', __('Group id'));
        $grid->column('category_id', __('Category id'));
        $grid->column('status', __('Status'));
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



    }


}
