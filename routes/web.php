<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Publika rutter som alla kan se
Route::get('/', function () {
    return view('home');
});

// Autentiseringsrutter (login, registration etc.)
require __DIR__.'/auth.php';

// Produktrutter - skyddade med auth middleware
Route::controller(ProductController::class)
    ->middleware(['auth'])
    ->prefix('products')
    ->group(function () {
        // Begränsad åtkomst för vanliga användare
        Route::get('/', 'index')
            ->name('products.index');
        Route::get('/{product}', 'show')
            ->name('products.show');
        
        // Admin-specifika funktioner
        Route::middleware(['admin'])->group(function () {
            Route::get('/create', 'create')
                ->name('products.create');
            Route::post('/store', 'store')
                ->name('products.store');
            Route::get('/{product}/edit', 'edit')
                ->name('products.edit');
            Route::patch('/{product}', 'update')
                ->name('products.update');
            Route::delete('/{product}', 'destroy')
                ->name('products.destroy');
        });
    });

// Omdirigera dashboard till produktsidan för alla inloggade användare
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return redirect()->route('products.index');
    })->name('dashboard');
});

// Admin-dashboard
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});
