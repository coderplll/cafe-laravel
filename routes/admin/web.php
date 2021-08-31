<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminController;

Route::prefix('admin')->group(function () {
  Route::get('/', [AdminController::class, 'index']);
  Route::get('index', [AdminController::class, 'index']);
  Route::get('category', [AdminController::class, 'category']);
  Route::get('detail', [AdminController::class, 'detail']);
});
