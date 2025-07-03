<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use App\Http\Controllers\medicineController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

Route::get('dashboard', [medicineController:: class, 'dashboard'])
    ->middleware(['auth'], 'verified')
    ->name('dashboard');

Route::get('medicines', [medicineController:: class, 'medicines'])
    ->middleware(['auth'], 'verified')
    ->name('medicines');

Route::get('patients', [medicineController:: class, 'patients'])
    ->middleware(['auth'], 'verified')
    ->name('patients');


Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

require __DIR__.'/auth.php';
