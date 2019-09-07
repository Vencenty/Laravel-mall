<?php

namespace App\Admin\Controllers;

use App\Models\User;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class UserController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Models\User';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new User);

        $grid->column('id', __('Id'));
        $grid->column('username', __('Username'));
        $grid->column('password', __('Password'));
        $grid->column('real_name', __('Real name'));
        $grid->column('nickname', __('Nickname'));
        $grid->column('avatar', __('Avatar'));
        $grid->column('mobile', __('Mobile'));
        $grid->column('email', __('Email'));
        $grid->column('created_at', __('Created at'));
        $grid->column('last_login_time', __('Last login time'));
        $grid->column('last_login_ip', __('Last login ip'));
        $grid->column('bio', __('Bio'));
        $grid->column('status', __('Status'));

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
        $show->field('real_name', __('Real name'));
        $show->field('nickname', __('Nickname'));
        $show->field('avatar', __('Avatar'));
        $show->field('mobile', __('Mobile'));
        $show->field('email', __('Email'));
        $show->field('created_at', __('Created at'));
        $show->field('last_login_time', __('Last login time'));
        $show->field('last_login_ip', __('Last login ip'));
        $show->field('bio', __('Bio'));
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
        $form->text('real_name', __('Real name'));
        $form->text('nickname', __('Nickname'));
        $form->image('avatar', __('Avatar'));
        $form->mobile('mobile', __('Mobile'));
        $form->email('email', __('Email'));
        $form->datetime('last_login_time', __('Last login time'))->default(date('Y-m-d H:i:s'));
        $form->text('last_login_ip', __('Last login ip'));
        $form->text('bio', __('Bio'));
        $form->switch('status', __('Status'));

        return $form;
    }
}
