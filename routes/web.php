<?php

use App\Http\Controllers\ContactController;
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
    return view('welcome', ['tag' => 'Home']);
});

Route::view('/about', 'about', ['tag' => 'About Us']);
Route::view('/services', 'services', ['tag' => 'Services']);
Route::view('/contact', 'contact', ['tag' => 'Contact']);

Route::post('/sendmail', [ContactController::class, 'sendMail'])->name('contactus');
