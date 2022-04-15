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
use App\Facades\CacheGroup;
Route::get('/', function () {
    event(new \App\Events\FirstEvent("renchaohong测试自动构建"));
    return view('welcome');
});

Route::get("aa",function (){
    echo  cacheApp::driver('redis')->cache('redis');
    return cacheApp::driver('file')->cache('file');

});
