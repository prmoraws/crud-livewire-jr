<?php

use App\Livewire\CreateMembros;
use App\Livewire\{Foto, ShowMembros, Update};
use Illuminate\Support\Facades\Route;

Route::get('membros', ShowMembros::class)->name('membros')->middleware('auth');
Route::get('create', CreateMembros::class)->middleware('auth');
Route::get('foto', Foto::class)->name('foto')->middleware('auth');
Route::get('update', Update::class)->name('update')->middleware('auth');

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
