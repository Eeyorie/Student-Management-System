<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

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

// vue js index
// Route::get('/', function () {
//         return view('welcome');
//     });

Route::get('/', function () {
    return view('login.index');
});

Route::get('/test', [TestController::class, 'test'])->name('test');

Route::get('locale/{lange}', [LocalizationController::class, 'setLang'])->name('lang');


Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerPost'])->name('register');


Route::group(['middleware' => 'auth'], function () {
    Route::resource('/home', HomeController::class);
    Route::resource('/faculty', FacultyController::class);
    Route::resource('/employee', EmployeeController::class);
    Route::resource('/student', StudentController::class);
    Route::resource('/role', RoleController::class);
    Route::resource('/office', OfficeController::class);
    Route::resource('/profile', ProfileController::class);
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
});


//Localization Route


