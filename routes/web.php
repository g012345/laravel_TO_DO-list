<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\NoteController;
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


Route::get('/', [PagesController::class, 'index'])->name("index");
Route::get('/notes/edit', [PagesController::class, 'edit']);
Route::get('/notes/create', [PagesController::class, 'create']);
Route::post('/notes/create/check', [NoteController::class, 'create_check']);
Route::get('/notes/delete/{id}', [NoteController::class, 'delete'])->name('delete');
Route::get('/notes/edit/{id}', [NoteController::class, 'edit'])->name('edit');
Route::post('/notes/update/{id}', [NoteController::class, 'update'])->name('update');

