<?php

namespace App\Admin\Controllers;

use App\Models\Goods;
use App\Models\GoodsTag;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Support\Str;
use Tests\Models\Tag;

class GoodsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Models\Goods';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Goods);

        $grid->column('id', __('Id'));
        $grid->column('title', __('Title'))->setAttributes(['style' => 'color:red']);
        $grid->column('desc', __('Desc'))->display(function ($desc) {
            return Str::limit($desc, 5, '......');
        });
        $grid->column('stock', __('Stock'));
        $grid->column('thumb', __('Thumb'))->display(function ($thumb) {
            return Str::limit($thumb, 5, '......');
        });
        $grid->column('max_price', __('Max price'));
        $grid->column('min_price', __('Min price'));
        $grid->column('real_price', __('Real price'));
        $grid->column('price', __('Price'));
        $grid->column('tag_id', __('Tag id'))->display(function ($tagId) {
            return GoodsTag::find($tagId)->title;
        })->label();
        $grid->column('status', __('status'))->display(function ($status) {
            return (int)$status === 0 ? "下架" : "上架";
        })->label();
        $grid->column('group_id', __('Group id'));
        $grid->column('category_id', __('Category id'));
        $grid->column('created_at', __('Created at'))->sortable();
        $grid->column('updated_at', __('Updated at'));

        $grid->filter(function ($filter) {
            // 设置created_at字段的范围查询
            $filter->between('created_at', 'Created Time')->datetime();
        });


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

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('desc', __('Desc'));
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

        $form->text('title', __('Title'));
        $form->text('desc', __('Desc'));
        $form->number('stock', __('Stock'));
        $form->text('thumb', __('Thumb'));
        $form->decimal('max_price', __('Max price'));
        $form->decimal('min_price', __('Min price'));
        $form->decimal('real_price', __('Real price'));
        $form->decimal('price', __('Price'));
        $form->number('tag_id', __('Tag id'));
        $form->number('group_id', __('Group id'));
        $form->number('category_id', __('Category id'));

        return $form;
    }
}
