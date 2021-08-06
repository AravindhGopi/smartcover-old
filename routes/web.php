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
use Illuminate\Support\Facades\App;
Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    // return $exitCode;
});
Route::get('/test', "HomeController@test");
Route::get('getStores/{id}',"StoreDetailsController@show");
Route::post('add-loan','LoanDetailsController@store');
Route::post('edit-loan','LoanDetailsController@update');
Route::post('search_loan','LoanDetailsController@search');


// Route::get('get-categories');
Route::get('/apply-now', "HomeController@index");
Route::get('/', function(){
    return view('how-to-apply');
});
Route::get('/thanks', "HomeController@thanks");
Route::post('/profile-form', "HomeController@uploadData");
Route::get('/xmltest', function(){
    return view('xml.data');
});
Route::get('/pdftest',function(){
    return view('pdf',['AC1' => "123",'AC2' => "222",'AC3' => "456",'AC4' => "345",'ACName' => "Aravindh",'AuthorizerName' => "Shanthi",'StartDate' => '20/02/12','Frequency' => "Weekly"]);
});
Route::get('/mailable', function () {
    $x = [1,2,3];

    return new App\Mail\ProfileDetail($x);
});
Route::get('symlink', function(){ 
    App::make('files')->link(storage_path('app/public'), "/home/applysmart/public_html/storage");
    die("test");
});
