<?php

use App\Http\Controllers\Admin\SupportController;
use App\Http\Controllers\Site\SiteController;
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

/** 06/11/2023 */

Route::get('/supports/create', [SupportController::class, 'create'])->name('supports.create');

Route::get('/supports', [SupportController::class, 'index'])->name('supports.index');

Route::get('/contacts', [SiteController::class, 'action']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('Iniciando');
});
