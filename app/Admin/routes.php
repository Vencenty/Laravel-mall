<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('admin.home');
    $router->resource('goods', GoodsController::class);
    $router->resource('goods-categories', GoodsCategoryController::class);
    $router->resource('goods-groups', GoodsGroupController::class);
    $router->resource('goods-tags', GoodsTagController::class);
    $router->resource('users', UserController::class);


});
