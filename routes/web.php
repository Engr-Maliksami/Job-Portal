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
// default page Route
Route::Get('/', function () {
    return view('home');

});
// home page Route
Route::Get('/home', function () {
    return view('home');

});
// about us Route
Route::Get('/about', function () {
    return view('aboutus');

});
// candidate Route
Route::get('/candidate', function () {

    return view('candidate');

});
//browsejob route
Route::get('/browsejob', function () {
    return view('browsejob');
});


// Mange jobs
Route::get('/Managejobs', function () {


    return view('Managejobs');

 });


 Route::get('/browsecategory', function () {


    return view('browsecategory');

 });
