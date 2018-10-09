<?php
use App\Http\Controllers\Auth\LoginController;
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
    return redirect()->route('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', function () {
    return redirect('login')->with(Auth::logout());
});
Route::get('/testview', function () {
    return view('master');
});
Route::get('/test', function(){
        
});
Route::group(['prefix' => 'test'], function () {
    Route::get('create', function(){
    
    });
    Route::get('read/{id}', function(){

    });
    Route::get('read/{id}/test', function(){

    });
    Route::get('update/{id}', function () {
        
    });
    Route::get('delete/{id}', function(){
        
    });
});

