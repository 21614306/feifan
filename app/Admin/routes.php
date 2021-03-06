<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Dcat\Admin\Admin;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');

    $router->resource('/article','ArticleController');

    $router->resource('/base','BasisController');

    $router->resource('/articleType','ArticleTypeController');


    $router->resource('/authentication','AuthenticationController');


    $router->resource('/company','CompanyController');


});



// Route::get('/lll', 'ArticleController@abc');
