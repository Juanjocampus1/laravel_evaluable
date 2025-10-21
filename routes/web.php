<?php

use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

// Ruta principal - redirige al listado de productos
Route::get('/', function () {
    return redirect()->route('productos.index');
});

// Rutas para gestión de productos
Route::get('/productos', [ProductoController::class, 'index'])->name('productos.index');
Route::get('/productos/{id}', [ProductoController::class, 'show'])->name('productos.show');
