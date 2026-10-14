<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;


Route::view('/', 'home')->name('home');

Route::get('/kendraaan', [kendraaanController::class, 'index'])->name('kendraaan.index');

Route::get('/sewa/{id}', [sewacontroller::class, 'show'])->name('sewa.show');