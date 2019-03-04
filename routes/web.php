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

Route::name('home-page')->get('', function () {
    return redirect()->route('front.index');
});

Route::namespace('Front')->name('front.')->group(function (){

    Route::name('index')->get('/generator-cv', 'IndexController@show');
    Route::name('generate-cv')->post('/generator-cv', function () {
        return 1;
    });
});
