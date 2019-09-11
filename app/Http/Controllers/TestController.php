<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserGroup;
use DebugBar\DebugBar;
use Encore\Admin\Grid\Filter\Group;

class TestController extends Controller
{
    public function index()
    {

        $r = UserGroup::find(3)->users()->get()->toArray();
        return response($r);


    }
}
