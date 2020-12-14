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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/helloworld',function (){
    return view('helloworld');
});
//
//Route::get('/user','UserController@showInfo')->middleware('auth');
Route::get('/admin','AdminController@showImportantInfo')
    ->middleware(['auth','role:admin']);
// Sau dấu 2 chấm tham số sẽ được truyền đến đối số thứ 3 của middleware admin === $role

//Dat ten cho route. Co y nghia khi goi den route
Route::get('/article','ArticleController@view')->name('view');

// Router của resoure controller chỉ cần 1 route duy nhất trỏ đến controller này
// xem cac route lien quan den Resourse controller php artisan route:list
Route::resource('/baiviet','ArticleController1');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


