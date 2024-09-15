<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeSectionController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {

    Route::get('/homesection', [HomeSectionController::class, 'index'])->name('homesection');
    Route::post('/homemetaupdate/{id}', [HomeSectionController::class, 'metaUpdate'])->name('homemetaupdate');
    Route::post('/homeserviceupdate/{id}', [HomeSectionController::class, 'serviceUpdate'])->name('homeserviceupdate');
    Route::post('/homevisaupdate/{id}', [HomeSectionController::class, 'visaUpdate'])->name('homevisaupdate');
    Route::post('/popularupdate/{id}', [HomeSectionController::class, 'popularUpdate'])->name('popularupdate');
    Route::post('/globalvisaupdate/{id}', [HomeSectionController::class, 'globalvisaupdate'])->name('globalvisaupdate');
    Route::post('/testimonialupdate/{id}', [HomeSectionController::class, 'testimonialupdate'])->name('testimonialupdate');




    Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');
    Route::get('/clients/create', [ClientController::class, 'create'])->name('clients.create');
    Route::post('/clients/store', [ClientController::class, 'store'])->name('clients.store');
    Route::get('/clients/edit/{id}', [ClientController::class, 'edit'])->name('clients.edit');
    Route::post('/clients/update/{id}', [ClientController::class, 'update'])->name('clients.update');
    Route::any('/clients/delete/{id}', [ClientController::class, 'destroy'])->name('clients.destroy');

});
