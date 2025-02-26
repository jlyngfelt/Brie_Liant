<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('home');
});

Route::controller(ProductController::class)
    ->prefix('products')
    ->group(function () {

        Route::get('/', 'index')
            ->name('products.index');

        Route::get('/create', 'create')
            ->name('products.create');

        Route::post('/store', 'store')
            ->name('products.store');

        Route::get('/{product}', 'show')
            ->name('products.show');

        Route::get('/{product}/edit', 'edit')
            ->name('products.edit');

        Route::patch('/{product}', 'update')
            ->name('products.update');

        Route::delete('/{product}', 'destroy')
            ->name('products.destroy');
    });
