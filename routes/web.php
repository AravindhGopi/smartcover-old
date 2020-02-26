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
    $exitCode = Artisan::call('cache:clear');
    $viewCache = Artisan::call('view:clear');
    $routeCache = Artisan::call('route:clear');
    return $exitCode;
});
Route::get('/test', "HomeController@test");
Route::get('/apply-now', "HomeController@index");
Route::get('/', function(){
    return view('how-to-apply');
});
Route::get('/thanks', "HomeController@thanks");
Route::post('/profile-form', "HomeController@uploadData");
Route::get('/mailable', function () {
    $x = [1,2,3];

    return new App\Mail\ProfileDetail($x);
});
Route::get('symlink', function(){ 
    App::make('files')->link(storage_path('app/public'), "/home/applysmart/public_html/storage");
    die("test");
});