<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/home', function () {
    return view('Layout.home');
})->name('home');

Route::get('/dashboard', function () {
    return view('Admin.adminPanel');
})->name('dashboard');

Route::get('/e-dashboard', function () {
    return view('Employee.employeePanel');
})->name('e-dashboard');

Route::get('/general', function () {
    return view('general');
})->name('general');

Route::get('/buttons', function () {
    return view('buttons');
})->name('buttons');

Route::get('/panels', function () {
    return view('panels');
})->name('panels');


Route::get('/calendar', function () {
    return view('Admin.calendar');
})->name('calendar');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/todo', function () {
    return view('todo_list');
})->name('todo_list');



Route::get('/lock', function () {
    return view('lock_screen');
})->name('lock_screen');




