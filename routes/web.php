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






Route::get('/index',function(){
    return view('index');
});

Route::get('/Home',function(){
    return view('Home');
});

Route::get('/homepage',function(){
    return view('homepage');
});


Route::get('/AboutUs',function(){
    return view('AboutUs');
});

Route::get('/ContactUs',function(){
    return view('ContactUs');
});

Route::get('/Gallery',function(){
    return view('Gallery');
});

Route::get('/ordershirts',function(){
    return view('ordershirts');
});

Route::get('/footer',function(){
    return view('footer');
});




Auth::routes();

Route::get('/Home', 'HomeController@index')->name('Home');



Route::group(['middleware' => ['auth','admin']], function (){

Route::get('/dashboard',function(){
    return view('admin.dashboard');
});

Route::get('role-register','Admin\DashboardController@registered');
Route::get('/role-edit/{id}','Admin\DashboardController@registeredit');
Route::put('/role-register-update/{id}','Admin\DashboardController@registerupdate');
Route::delete('/role-delete/{id}','Admin\DashboardController@registerdelete');

Route::get('/employees','Admin\EmployeesController@index');
Route::post('/save-employees','Admin\EmployeesController@store');
Route::get('/employees-edit/{id}','Admin\EmployeesController@edit');
Route::put('/employees-update/{id}','Admin\EmployeesController@update');
Route::delete('/employees-delete/{id}','Admin\EmployeesController@delete');




});

