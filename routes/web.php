<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use App\Http\Controllers\medicineController;
use App\Http\Controllers\TableController;
use Illuminate\Support\Facades\Route;

// Route::get('/tables', function () {
//     return view('tables');
// })->name('tables');

Route::get('tables', [TableController::class, 'index'])
    ->name('table');

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', [medicineController::class, 'dashboard'])
        ->name('dashboard');

    Route::get('medicines', [medicineController::class, 'medicines'])
        ->name('medicines');

    Route::get('patients', [medicineController::class, 'patients'])
        ->name('patients');
});




Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

require __DIR__ . '/auth.php';
