<?php

use App\Http\Controllers\chart;
use App\Http\Controllers\TblCommentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TblPostController;

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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');

// Post Add Route
Route::get('/post/create', [TblPostController::class, 'create']);
Route::post('/post/create', [TblPostController::class, 'store']);
Route::get('/post/view', [TblPostController::class, 'index']);
Route::get('/post/display/{id}', [TblPostController::class, 'show']);
Route::get('/post/edit/{id}', [TblPostController::class, 'edit']);
Route::post('/post/update', [TblPostController::class, 'update']);
Route::get('/post/delete/{id}', [TblPostController::class, 'destroy']);
Route::get('/post/json', [TblPostController::class, 'json']);


// Comment Add Route
Route::get('/comment/create', [TblCommentController::class, 'create']);
Route::post('/comment/create', [TblCommentController::class, 'store']);
Route::get('/comment/view', [TblCommentController::class, 'index']);
Route::get('/comment/display/{id}', [TblCommentController::class, 'show']);
Route::get('/comment/edit/{id}', [TblCommentController::class, 'edit']);
Route::post('/comment/update', [TblCommentController::class, 'update']);
Route::get('/comment/delete/{id}', [TblCommentController::class, 'destroy']);
Route::get('/comment/json', [TblCommentController::class, 'json']);


// Chard Route

Route::get('/chart/bar', [chart::class, 'bar']);
Route::get('/chart/pie', [chart::class, 'pie']);
