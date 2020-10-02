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

Route::prefix('/tender')->group(function () {
    Route::get('/','TenderController@index')->name('tender.index');
    Route::get('/add','TenderController@create')->name('tender.create');
    Route::post('/add','TenderController@store')->name('tender.store');
    Route::get('/show','TenderController@show')->name('tender.show');
    Route::get('/approve/{tender}','TenderController@approve')->name('tender.approve');
    Route::get('/decline/{tender}','TenderController@decline')->name('tender.decline');
    Route::get('/delete/{tender}','TenderController@delete')->name('tender.delete');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
