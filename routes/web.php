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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['web','auth']], function(){
 Route::get('/',function(){
     return view('welcome');
 });

 Route::get('/home', function() {
     if(Auth::user()->admin == 0){
         return view('home');
     }else{
         $users['users'] = \App\User::all();
         return view('adminhome',$users);
     };
    });
});

Route::get('/books' , 'BooksController@index');

//Route::get('/books/create', 'BooksController@create');

Route::get('/books/{book}', 'BooksController@show');

//Route::post('/books', 'BooksController@store');

Route::get('/books/borrow/{bookId}' , 'BorrowedController@index');

Route::get('/books/returned/{bookId}' , 'ReturnedController@index');

// Route::post('/books/borrow/{bookId}' , 'BorrowedController@store');

Route::get('/adminhome' , 'AdminController@index');

Route::post('/delete/{id}', 'AdminController@delete')->name('delete');

Route::get('/createbooks', 'AdminController@create');
Route::post('/books', 'AdminController@store');


