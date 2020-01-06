<?php

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

Route::get('/', function () {
    // echo "api.1905.com";die;
    return view('welcome');
});

Route::get('/info',function(){
    phpinfo();
});

Route::get('/test/pay','TestController@alipay');    // 沙箱支付测试

Route::get('/test/ascii','TestController@ascii');    // 加密
Route::get('/test/dec','TestController@dec');    // 解密
Route::get('/test/dec2','TestController@dec2');    // 解密2
Route::get('/test/caesar','TestController@caesar');    // 加密


Route::get('/test/alipay/return','Alipay\PayController@aliReturn');
Route::post('/test/alipay/notify','Alipay\PayController@notify');

// 接口
Route::get('/api/test','Api\TestController@test');

Route::post('/api/user/reg','Api\TestController@reg');  // 用户注册
Route::post('/api/user/login','Api\TestController@login');  // 用户登录
Route::get('/api/user/list','Api\TestController@userList')->middleware('filter');  // 用户登录
