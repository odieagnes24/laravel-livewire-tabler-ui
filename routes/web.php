<?php

use App\Livewire\Auth\Login;
use App\Livewire\Home;
use Illuminate\Support\Facades\Route;


Route::get('/login', Login::class)->name('login')->middleware('guest');

Route::middleware(['auth'])->group(function() {
    Route::get('/', Home::class);
});
