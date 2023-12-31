<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LeadController;
use App\Actions\Fortify\CreateNewUser;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\PermissionController;

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

Route::middleware(['auth'])->group(function () {

    
Route::get('/home', function () {
    return view('Layout.home');
})->name('home');

Route::get('/dashboard', function () {
    return view('Admin.adminPanel');
})->name('dashboard');

Route::get('/e-dashboard', function () {
    return view('Employee.employeePanel');
})->name('e-dashboard');




Route::get('/calendar', function () {
    return view('Admin.calendar');
})->name('calendar');



Route::get('/todo', function () {
    return view('todo_list');
})->name('todo_list');

Route::get('/permission', function () {
    return view('admin.role_permission');
})->name('permission');



Route::get('/lock', function () {
    return view('lock_screen');
})->name('lock_screen');


Route::get('/lead', function () {
    return view('Employee.addLead');
})->name('lead');



Route::post('/leads', [LeadController::class, 'store'])->name('leads.store');
Route::get('/leads', [LeadController::class, 'index'])->name('leads.index');
Route::get('/my-leads', [LeadController::class, 'myLeads'])->name('my-leads');
Route::get('/employees', [CreateNewUser::class, 'index'])->name('employees.index');
Route::post('/notice', [NoticeController::class, 'store'])->name('notice.store');
Route::get('/addnotice', [NoticeController::class, 'view'])->name('addnotice.view');
Route::get('/notice-board', [NoticeController::class, 'index'])->name('notice-board.index');



Route::post('/permit', [PermissionController::class, 'store'])->name('permit');





});

