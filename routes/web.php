<?php

use App\Http\Controllers\PcpController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;



Route::get('/', [PcpController::class, 'index'])->name('pcp.index');
Route::post('/', [PcpController::class, 'search'])->name('pcp.search');
Route::get('/pcp', [PcpController::class, 'pcp'])->name('pcp.pcp');
Route::post('/store', [PcpController::class, 'store'])->name('pcp.store');



// Route::get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__ . '/auth.php';
