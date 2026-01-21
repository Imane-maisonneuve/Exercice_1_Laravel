<?php

use App\Http\Controllers\ResumeController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [ResumeController::class, 'index']);
Route::get('/contact', [ResumeController::class, 'contactIndex']);
Route::get('/projects', [ResumeController::class, 'projects']);
Route::get('/resume', [ResumeController::class, 'resume']);
Route::post('/contact', [ResumeController::class, 'contactSubmit']);
