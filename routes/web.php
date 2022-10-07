<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ToDoListController;
use App\Models\TodoList;
use Illuminate\Support\Facades\Route;

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


Route::get('/' , [ToDoListController::class, 'index'])->name('index');
Route::get('/add' , [ToDoListController::class, 'create'])->name('add');
Route::get('/add_mhs' , [MahasiswaController::class, 'create'])->name('add_mhs');
Route::post('/store_mhs' , [MahasiswaController::class, 'store'])->name('store_mhs');
Route::post('/store_todo' , [ToDoListController::class, 'store'])->name('store_todo');
Route::get('/show/{id}', [ToDoListController::class, 'show'])->name('show');
Route::post('/update/{id}', [ToDoListController::class, 'update'])->name('update');
Route::get('/delete/{id}', [ToDoListController::class, 'destroy'])->name('delete');