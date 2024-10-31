<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\App\Index;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/chat', Index::class)->name('chat.index');

require __DIR__.'/auth.php';


