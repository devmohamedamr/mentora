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
//----------------api --------------------------
Route::group(['prefix' => 'api/v1'], function()
{
    Route::get('home', function(){
        $data = \App\homeModel::find(1);
        return response()->json($data);
    });
});
//-----------------end api ---------------------
//---------------front route----------------

Route::resource('/','Front\homeController');
Route::resource('/post','Front\postController');
Route::resource('/team','Front\teamController');
Route::resource('/contact','Front\contactController');
Route::resource('/blog','Front\blogController');


//---------------admin route-----------------------
Route::resource('Admin/home','Admin\homeController');
Route::resource('Admin/missions','Admin\missionsController');
Route::resource('Admin/partner','Admin\partnerController');
Route::resource('Admin/posts','Admin\postsController');
Route::resource('Admin/service','Admin\serviceController');
//-------------- end admin route ---------------------
Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');