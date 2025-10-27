<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Talent\GeneralController;
use App\Http\Controllers\Talent\LegalController;
use App\Http\Controllers\Talent\ContactController;
use App\Http\Controllers\Talent\AgencyController;
use App\Http\Controllers\Talent\UsageController;
use App\Http\Controllers\Talent\StatsController;
use App\Http\Controllers\Talent\DocumentController;
use App\Http\Controllers\Talent\ImageController;


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
        Route::get('/talent/add', [GeneralController::class, 'add'])->name('talent.add');
        Route::get('/talent/view', [GeneralController::class, 'view'])->name('talent.view');
        Route::post('/talent/general/store', [GeneralController::class, 'store'])->name('talent.general.store');
        Route::post('/talent/legal/store', [LegalController::class, 'store'])->name('talent.legal.store');
        Route::post('/talent/contact/store', [ContactController::class, 'store'])->name('talent.contact.store');
        Route::get('/talent/contacts/list/{t_general_id}', [ContactController::class, 'list'])->name('talent.contacts.list');
        Route::post('/talent/agencies/store', [AgencyController::class, 'store'])->name('talent.agencies.store');
        Route::get('/talent/agencies/list/{t_general_id}', [AgencyController::class, 'list'])->name('talent.agencies.list');
        Route::delete('/talent/agencies/delete/{id}', [AgencyController::class, 'delete'])->name('talent.agencies.delete');
        Route::post('/talent/stats/store', [StatsController::class, 'store'])->name('talent.stats.store');
        Route::post('/talent/documents/store', [DocumentController::class, 'store'])->name('talent.documents.store');
        Route::post('/talent/usage/store', [UsageController::class, 'store'])->name('talent.usage.store');

        Route::post('/talent/images/upload', [ImageController::class, 'upload'])->name('talent.images.upload');
        Route::post('/talent/image/rotate', [ImageController::class, 'updateRotation'])->name('talent.image.rotate');
        Route::post('/talent/image/crop', [ImageController::class, 'saveCrop'])->name('talent.image.crop');
        Route::delete('/talent/images/{id}', [ImageController::class, 'delete'])->name('talent.images.delete');
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
