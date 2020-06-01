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
    return view('homepage');
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

Route::get('/login',function(){
    return view('login');
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

Route::post('/savefeedback','FeedbacksController@store');






});

Route::get('/feedbacks',function(){
    $data=App\Feedback::all();
    return view('feedback')->with('feedback',$data);
});

Route::post('/savefeedback','FeedbackController@store');
Route::post('/saveorder1','ShirtsController@store');

Route::get('/orders',function(){
    $data=App\Shirts::all();
    return view('order')->with('orders',$data);
});




/*Route::get('/customerdashboard',function(){
    return view('customer.customerdashboard');
});*/

Route::post('/addimage','CompleteController@store')->name('addimage');

Route::post('/confirm','ConfirmController@store')->name('confirm');

Route::get('/pastorders','PastOrdersController@index');

Route::get('/customernotification','CustomerNotificationController@index');

Route::get('/completedorders','completedorders@index');



Route::get('/markascompleted/{id}','ShirtsController@update');
Route::get('/markasnotcompleted/{id}','ShirtsController@notupdate');

Route::get('/markasconfirmed/{id}','ShirtsController@confirm');
Route::get('/markasnotconfirmed/{id}','ShirtsController@notconfirm');

Route::get('/markascanceled/{id}','ShirtsController@cancel');
Route::get('/markasnotcanceled/{id}','ShirtsController@notcancel');

Route::get('/cancel','CancelController@index');

Route::get('/markaspayed/{id}','completedorders@pay');
Route::get('/markasnotpayed/{id}','completedorders@notpay');







