<?php

use App\Livewire\CreateMembros;
use App\Livewire\ShowMembros;
use Illuminate\Support\Facades\Route;

Route::get('membros', ShowMembros::class)->name('membros');
Route::get('create', CreateMembros::class);

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
