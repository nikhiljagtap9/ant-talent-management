<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TalentGeneralController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::middleware(['auth', 'verified'])->group(function () {

    // Common Dashboard for all users
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/calendar', [CalendarController::class, 'index'])->name('calendar');
    Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts');
    Route::get('/users', [UserController::class, 'index'])->name('users');

    // Admin only
    Route::middleware('admin')->group(function () {
        Route::get('/talent/add', [TalentGeneralController::class, 'add'])->name('talent.add');
        Route::get('/talent/view', [TalentGeneralController::class, 'view'])->name('talent.view');
        Route::post('/talent/general/store', [TalentGeneralController::class, 'store'])->name('talent.general.store');

    });


    // Manager can access reports, projects, etc.
    // Route::middleware('manager')->group(function () {
    //     Route::get('/reports', [ReportController::class, 'index'])->name('reports');
    // });

    // Outside user only view data
    // Route::middleware('external-user')->group(function () {
    //     Route::get('/view-only', [ViewOnlyController::class, 'index'])->name('view.only');
    // });

});

require __DIR__.'/auth.php';
