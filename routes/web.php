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

Route::get('/lang/{lang}',function($lang){
    $arraylang = ['ar','en','tr'];
    if(in_array($lang,$arraylang)){
        session()->put('lang',$lang);
    }else{
        session()->put('lang','en');
    }
    return back();
});
Route::get('admin',function(){
    return view('admin');
});
Route::group(['middleware'=>['auth'],'prefix' => 'atAdmin'],function(){
    Route::get('/',function(){
        return view('admins.start');
    });
    Route::get('/products','adminController@index');
});
Route::group(['prefix' => 'atAdmin'], function(){
    Auth::routes();
    //['register' => false]
});
Route::group(['middleware'=>'lang'],function(){
    Route::get('/', function () {
        return view('index');
    });
    Route::get('/aboutus',function(){
        return view('about');
    });
    route::get('/products','productController@index');
    
    route::get('/products/search/{product}','productController@search');
    
    route::get('/contact','contactController@index');
});



Route::get('/home', 'HomeController@index')->name('home');
