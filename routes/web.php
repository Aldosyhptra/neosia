<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NeosiaController;

Route::get('/', [NeosiaController::class, 'index'])->name('neosia.index');