<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//跟路由
Route::get('/', function () {
    echo 'please enter the address:/home/crud';
});
Route::get('/home', function () {
    echo 'please enter the address:/home/crud';
});

/*
//路由群组
Route::group(['prefix'=>'admin'],function(){
    //若访问/home地址则路由可以写成
    //Route::请求方式（‘请求的URL'，匿名函数或控制响应的方法）
    Route::any('/home/{id?}',function($id=0){
        echo '当前访问的用户ID是' . $id;
    });

    //通过?形式传递get参数
    Route::any('/test',function(){
        echo '当前访问的用户ID是' . $_GET['id'];
    })->name('houlin');  //路由别名
});
*/


//group路由群组
Route::group(['prefix'=>'home'],function(){
    //DB门面的增删改查
    Route::get('/del','Admin\DelController@del');
    Route::get('/update','Admin\UpdateController@update');
    //展示视图
    Route::get('/views','Admin\CrudController@views');
});
