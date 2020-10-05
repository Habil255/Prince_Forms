<?php
use Illuminate\Support\Facades\Route;
use App\Models\User;

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



Route::prefix('/tender')->middleware('web')->group(function () {
    Route::get('/','TenderController@index')->name('tender.index');
    Route::get('/add','TenderController@create')->name('tender.create');
    Route::post('/add','TenderController@store')->name('tender.store');
    Route::get('/show','TenderController@show')->name('tender.show');
    Route::get('/approve/{tender}','TenderController@approve')->name('tender.approve');
    Route::get('/decline/{tender}','TenderController@decline')->name('tender.decline');
    Route::get('/delete/{tender}','TenderController@delete')->name('tender.delete');
});

Route::get('/user', function(){
    return User::all();
});

Route::get('/home', function(){
    return redirect()->route('tender.index');
});

Auth::routes();
