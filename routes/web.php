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

Route::get('/', 'HomeController@index'); //www.example.com
Route::get('/create', 'HomeController@create'); //www.example.com/create
Route::get('/login', 'HomeController@login');

Route::post('/store', 'HomeController@store');

Route::get('/edit/{product_id}', 'HomeController@edit');
Route::post('/update', 'HomeController@update');


//Route::get(/**
// *
// */
//    '/play', function (){
////    $categories = \Illuminate\Support\Facades\DB::table('categories');
////    return $categories
////             ->get(); //SELECT * FROM `categories`
//
////    $categories = \App\Category::all(); //SELECT * FROM `categories`
////    $categories = \App\Category::find(2);
////    return $categories;
//
////    $product = \App\Product::find(2);
////    return $product;
//
////        $product = App\Product::with("Category")->get();
////        return $product;
//});
