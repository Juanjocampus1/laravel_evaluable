<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\View\View;

/**
 * Controlador para gestionar productos
 * 
 * Este controlador maneja la lógica de negocio relacionada con productos,
 * separando responsabilidades y siguiendo las buenas prácticas de Laravel.
 * 
 * @author Juan José Acebedo Lara
 */
class ProductoController extends Controller
{
    /**
     * Muestra un listado de todos los productos
     * 
     * Recupera todos los productos de la base de datos y los pasa
     * a la vista para su visualización.
     * 
     * @return View
     */
    public function index(): View
    {
        // Obtener todos los productos ordenados por nombre
        $productos = Producto::orderBy('nombre')->get();

        // Retornar la vista con los datos
        return view('productos.index', compact('productos'));
    }

    /**
     * Muestra el detalle de un producto específico
     * 
     * Busca un producto por su ID y muestra sus detalles completos.
     * Si no se encuentra, Laravel lanzará una excepción 404.
     * 
     * @param int $id Identificador del producto
     * @return View
     */
    public function show(int $id): View
    {
        // Buscar el producto o fallar con 404 si no existe
        $producto = Producto::findOrFail($id);

        // Retornar la vista de detalle con el producto
        return view('productos.show', compact('producto'));
    }
}
