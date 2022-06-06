<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::get('/', [TestController::class, 'sayHi'])->name("say-hi");
Route::get('/bye', [TestController::class, 'sayBye'])->name("say-bye");
Route::get('/palindrome', [TestController::class, 'palindrome'])->name("palindrome");
