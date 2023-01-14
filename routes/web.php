<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanController;

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

Route::get("/",[KaryawanController::class, "index"])->name('home');
Route::get("add",[KaryawanController::class, "create"])-> name('add');
Route::post("store",[KaryawanController::class, "store"])->name('store');
Route::get("edit/{id}",[KaryawanController::class, "edit"])->name('edit');
Route::patch("update/{id}",[KaryawanController::class, "update"])->name('update');
Route::delete("delete/{id}",[KaryawanController::class, "destroy"])->name('delete');
Route::get("karyawan/search",[KaryawanController::class, "search"])->name('search');

