<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NeosiaController;

Route::get('/', [NeosiaController::class, 'index'])->name('neosia.index');
Route::get('/course', [NeosiaController::class, 'courseAll'])->name('neosia.courseAll');
Route::get('/course/detail', [NeosiaController::class, 'courseDetail'])->name('neosia.courseDetail');