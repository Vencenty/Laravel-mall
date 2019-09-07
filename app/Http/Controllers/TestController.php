<?php

namespace App\Http\Controllers;

use App\Models\Goods;
use App\Models\GoodsCategory;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $r = \Hash::make('admin');
    }
}
