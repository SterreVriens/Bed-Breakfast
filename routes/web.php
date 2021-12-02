<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\roomsController;
use \App\Http\Controllers\siteController;
use \App\Http\Controllers\userController;




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
//     return view('welcome');
// });

Route::get('/', [siteController::class, 'index'])->name('index');

Route::get('/over-ons', [siteController::class, 'overons'])->name('overons');

Route::get('/facaliteiten', [siteController::class, 'facaliteiten'])->name('facaliteiten');


Route::get('/onze-kamers', [roomsController::class, 'index'])->name('kamers.onze-kamers');

Route::get('/kamer', [roomsController::class, 'roomDetail'])->name('kamer');


Route::get('/login', [userController::class, 'loginView'])->name('login');

Route::get('/register', [userController::class, 'registerView'])->name('register');






// Route::get('/over-ons', function () {
//     return view('Over-ons');
// });
// Route::get('/facaliteiten', function () {
//     return view('facaliteiten');
// });
// Route::get('/onze-kamers', function () {
//     return view('kamers.onze-kamers');
// });
// Route::get('/kamer', function () {
//     return view('kamers.kamer');
// });
Route::get('/admin', function () {
    return view('loggedin.admin');
});
Route::get('/user', function () {
    return view('loggedin.user');
});
// Route::get('/login', function () {
//     return view('login');
// });
// Route::get('/register', function () {
//     return view('register');
// });
