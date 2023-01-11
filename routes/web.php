<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProjectController;

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
Route::get('/', function () {
    return view('layouts/home');
});
Route::get('/dashboard', function () {
    return view('layouts/dashboard');
});
// Route::get('/users', function () {
//     return view('layouts/users');
// });
Route::get('/users', [UserController::class, 'index']);

Route::get('/projects', [ProjectController::class, 'index']);

Route::get('/clients', function () {
    return view('layouts/clients');
});
// Route::get('/projects', function () {
//     return view('projects/create');
// });
Route::get('/tasks', function () {
    return view('layouts/tasks');
});