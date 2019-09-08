<?php

namespace App\Admin\Controllers;

use App\Models\User;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Encore\Admin\Widgets\Table;
use Tests\Models\Tag;

class UserController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '用户管理';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new User);



        $grid->filter(function(Grid\Filter $filter){

            // 去掉默认的id过滤器
            $filter->expandFilter();
            $filter->equal('status', '女');
            $filter->scope('created_at', '最近修改')
                ->whereDate('created_at', date('Y-m-d'))
                ->orWhere('updated_at', date('Y-m-d'));
        });
        $grid->column('id', __('Id'))->sortable();
        $grid->column('username', __('Username'))->expand(function ($model) {
            $groups = $model->groups->take(2)->map(function ($group) {
                return $group->only(['id', 'title', 'created_at']);
            });
            return new Table(['id', '内容', '发布时间'], $groups->toArray());
        });

        $grid->column('mobile', __('Mobile'));

        $grid->profile()->avatar()->image(50, 50);
        $grid->column('last_login_time', __('Last login time'))->hide();
        $grid->column('last_login_ip', __('Last login ip'))->hide();
        $grid->column('email', __('Email'))->gravatar();
//        $grid->column('status', __('Status'))->using(['1' => '正常', 0 => '封禁']);
        $grid->column('status', __('Status'))->loading([1, 2, 3],[
            0=>'完成'
        ])->dot([
            1 => 'danger',
            2 => 'info',
            3 => 'primary',
            4 => 'success',
        ]);

        $grid->column('created_at', __('Created at'))->sortable()->color('blue');
        $grid->column('updated_at', __('Updated_at'))->sortable();
        $grid->profile()->age()->display(function ($age) {
            return is_numeric($age) ? $age . '岁' : "未知";
        });
        $grid->column('progress')->progressBar($style = 'primary', $size = 'sm', $max = 100);
        $grid->column('address', '地址')->display(function ($address) {
            $count = count($address);
            return "<span class='label label-warning'>{$count}</span>";
        });

        $grid->column('goodsComments', '评论数')->display(function ($goodsComments) {
            $count = count($goodsComments);
            return "<span class='label label-warning'>{$count}</span>";
        });

        $grid->column('groups')->display(function ($group) {
            $roles = array_map(function ($group) {
                return "<span class='label label-info'>{$group['title']}</span>";
            }, $group);

            return join('&nbsp;', $roles);
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
        $show = new Show(User::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('username', __('Username'));
        $show->field('password', __('Password'));
        $show->field('mobile', __('Mobile'));
        $show->field('email', __('Email'));
        $show->field('created_at', __('Created at'));
        $show->field('last_login_time', __('Last login time'));
        $show->field('last_login_ip', __('Last login ip'));
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
        $form = new Form(new User);

        $form->text('username', __('Username'));
        $form->password('password', __('Password'));
        $form->mobile('mobile', __('Mobile'));
        $form->email('email', __('Email'));
        $form->datetime('last_login_time', __('Last login time'))->default(date('Y-m-d H:i:s'));
        $form->text('last_login_ip', __('Last login ip'));
        $form->switch('status', __('Status'));

        return $form;
    }
}
