<?php
use App\Http\Controllers\Auth\LoginController;
use App\Test;
use App\Categories;
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
        $tableTestdb = Test::join('categories', 'id_categories', '=', 'categories.id')->select('test.*', 'categories.title as categories')->getQuery()->get();
        $tableTest = array();
        foreach ($tableTestdb as $key) {
           array_push($tableTest, array(
            'id_categories' => $key->id_categories,
            'categories'=> $key->categories,
            'id' => $key->id,
            'title_test' => $key->title,
            'image_test' => $key->image
        ));
        }
        var_dump($tableTest);
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

