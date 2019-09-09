<?php

namespace App\Admin\Controllers;

use App\Admin\Forms\Setting;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class ExampleController extends Controller
{

    public function index(Content $content)
    {
        return $content
            ->title('网站设置')
            ->body(new Setting);
    }
}
