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
    return view('index');
})->name('home');
Route::get('/register', \App\Http\Livewire\RegisterForm::class)->name('register');
Route::get('/contact', \App\Http\Livewire\ContactForm::class)->name('contact');
Route::get('/signin', \App\Http\Livewire\SigninForm::class)->name('signin');

Route::view('/employers', 'employers')->name('employers');
Route::view('/employees', 'employees')->name('employees');
Route::view('/survey', 'survey')->name('survey');
Route::view('/terms', 'terms')->name('terms');
Route::view('/privacy', 'privacy')->name('privacy');


Route::view('login','livewire.home'); 