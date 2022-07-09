<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\crimeController;
use App\Http\Controllers\blogController;
use App\Http\Controllers\authController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\adminloginController;

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

// Route::get('/', function () {
//     return view('home');
// });

//Login system Route
// Route::group(['middleware' => 'guest'], function(){
Route::get('/signin', [authController::class, 'loginpage']);
//->middleware('adminAlreadyLoggedIn');
Route::get('/signup', [authController::class, 'registerpage']);
//->middleware('adminAlreadyLoggedIn');

Route::post('login', [authController::class, 'login'])->name('login');
// ->middleware('throttle:2,1');
Route::post('register', [authController::class, 'register'])->name('register');
// ->middleware('throttle:2,1');
// });

// Route::group(['middleware' => 'auth'], function(){
Route::get('/home', [HomeController::class, 'show']);
// });

Route::get('/crimepage', [crimeController::class, 'crimeform']);

Route::post('crime', [crimeController::class, 'storeCrime'])->name('crime');

Route::get('/crimeblog', [blogController::class, 'blogpage']);

Route::get('/admin', [adminController::class, 'admin']);

Route::get('/adminlogin', [adminloginController::class, 'adminlogged']);

Route::get('/logout', [authController::class, 'logout']);

Route::get('/adminlogout', [
    adminloginController::class,
    'adminlogout',
])->middleware('isLoggedIn');

Route::post('checkadmin', [adminloginController::class, 'checkadmin'])->name(
    'checkadmin'
);

Route::get('/', function () {
    return view('map');
});
