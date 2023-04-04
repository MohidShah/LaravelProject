<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\RecUpdateController;
use App\Http\Controllers\RecdeleteController;
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
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/contact', [ContactUsController::class, 'ContactUs']);

Route::post('/contact', [ContactUsController::class, 'contactSaveData']);

Route::get('edit-records', [RecUpdateController::class, 'index']);
Route::get('edit/{id}', [RecUpdateController::class, 'show']);
Route::post('edit/{id}', [RecUpdateController::class, 'edit']);

Route::get('delete-records}', [RecdeleteController::class, 'index']);
Route::get('delete/{id}', [RecdeleteController::class, 'destroy']);