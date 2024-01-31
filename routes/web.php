<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\MealController;
use App\Http\Controllers\Admin\ReservationController;
use App\Http\Controllers\Admin\TableController;
use App\Http\Controllers\Frontend\CategoryController as FrontendCategoryController;
use App\Http\Controllers\Frontend\MealController as FrontendMealController;
use App\Http\Controllers\Frontend\ReservationController as FrontendReservationController;
use App\Http\Controllers\Frontend\WelcomeController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::get('/meni', [FrontendCategoryController::class, 'index'])->name('categories.index');
Route::get('/meni/{name}', [FrontendCategoryController::class, 'show'])->name('categories.show');
Route::get('/o_nama', [FrontendMealController::class, 'index'])->name('meals.index');
Route::get('/rezervacija/prvi-korak', [FrontendReservationController::class, 'stepOne'])->name('reservations.step.one');
Route::post('/rezervacija/prvi-korak', [FrontendReservationController::class, 'storeStepOne'])->name('reservations.store.step.one');
Route::get('/rezervacija/drugi-korak', [FrontendReservationController::class, 'stepTwo'])->name('reservations.step.two');
Route::post('/rezervacija/drugi-korak', [FrontendReservationController::class, 'storeStepTwo'])->name('reservations.store.step.two');
Route::get('/zahvala', [WelcomeController::class, 'thankyou'])->name('thankyou');

Route::middleware(['auth', 'admin'])->name('admin.')->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::any('/kalendar', [AdminController::class, 'show'])->name('calendar');
    Route::resource('/categories', CategoryController::class);
    Route::resource('/meals', MealController::class);
    Route::resource('/tables', TableController::class);
    Route::resource('/reservations', ReservationController::class);
});

require __DIR__.'/auth.php';
