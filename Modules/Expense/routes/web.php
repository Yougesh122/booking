<?php

use Illuminate\Support\Facades\Route;
use Modules\Expense\Http\Controllers\ExpenseTestController;

Route::middleware(['auth', 'verified'])->group(function () {
});

Route::get('/tester', [ExpenseTestController::class, 'index']);
