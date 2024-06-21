<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

//HomeController
use App\Http\Controllers\HomeController;

//TournamentController
use App\Http\Controllers\TournamentController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


//route for the homecontroller for Admin Dashboard

Route::get('admin/dashboard', [HomeController::class,'index'])->Middleware(['auth', 'admin'])->name('admindashboard');

//route for the join tournament
