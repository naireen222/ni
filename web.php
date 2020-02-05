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
    return view('welcome');
});
Route::get('/hi', function () {
    return "hi..hwo arecyutiu";
});

Route::get('/abc/{id}/{name}', function ($id,$name) {
    return 'id='.$id.'and name='.$name.'';
});
Route::get('/list','pagescontroller@index');
Route::get('/services','pagescontroller@services');

Route::get('/register','pagescontroller@register'); 
Route::post('/user/register','pagescontroller@register_action'); 






