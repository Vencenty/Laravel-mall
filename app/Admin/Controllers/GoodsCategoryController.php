<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Models\GoodsCategory;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Controllers\ModelForm;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class GoodsCategoryController extends Controller
{
    use ModelForm;

    public function index()
    {
        return Admin::content(function (Content $content) {
            $content->header('模型树');
            $content->body(GoodsCategory::tree());
        });
    }



}
