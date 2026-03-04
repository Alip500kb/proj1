<?php

use App\Http\Controllers\Admin\DashboardController;
use Filament\Auth\Pages\Register;
use Illuminate\Support\Facades\Route; //penting
use Illuminate\Routing\Events\Routing\Controller\Middleware;

Route::middleware(['auth'])->group(function () {
    Route::get('register', [Register::class, 'create'])->name('register');
    Route::post('register', [Register::class, 'store']);
});
