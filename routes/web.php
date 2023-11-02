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


// Route::get('bookapp',function()
// {
//     return '<html><body><h1>本屋さん</h1><p>ここは初めの場所です.
//     やることは表示・追加・更新・削除機能・DBの整備をできるようになることです。
//     </p></body></html>';
// });


Route::get('bookapp','BooksController@index');

Route::get('bookapp/add','BooksController@add');
Route::post('bookapp/add','BooksController@create');

Route::get('bookapp/edit','BooksController@edit');
Route::post('bookapp/edit','BooksController@update');

Route::get('bookapp/del','BooksController@delete');
Route::post('bookapp/del','BooksController@remove');





