<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

Auth::routes(['verify'=> true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// -----------------------------------------------------------------


Route::get('/rules', [App\Http\Controllers\HomeController::class, 'rules'])->name('rules');


Route::get('/exam', [App\Http\Controllers\qustioncontroler::class, 'index'])->name('exam');

// ----------------------------------------------------------------------
// Test case

// Route::get('/rules', function () {
//     return view('layouts.pages.rules');
// });


// student img
Route::get('students', [App\Http\Controllers\Studentcontroller::class, 'index']);
Route::get('add-students', [App\Http\Controllers\Studentcontroller::class, 'create']);
Route::post('add-students', [App\Http\Controllers\Studentcontroller::class, 'store']);
