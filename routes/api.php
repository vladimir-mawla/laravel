<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::get('/', [TestController::class, 'sayHi'])->name("say-hi");
Route::get('/bye', [TestController::class, 'sayBye'])->name("say-bye");
Route::get('/palindrome', [TestController::class, 'palindrome'])->name("palindrome");
Route::get('/seconds', [TestController::class, 'seconds'])->name("seconds");
Route::get('/nominate', [TestController::class, 'nominate'])->name("nominate");
Route::get('/teams', [TestController::class, 'teams'])->name("teams");
Route::get('/text', [TestController::class, 'text'])->name("text");
Route::get('/beers', [TestController::class, 'beers'])->name("beers");