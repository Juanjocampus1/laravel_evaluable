<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Modelo Producto
 * 
 * @author Juan José Acebedo Lara
 */
class Producto extends Model
{
    /**
     * Tabla asociada al modelo
     *
     * @var string
     */
    protected $table = 'productos';

    /**
     * Los atributos que son asignables masivamente
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'stock',
    ];

    /**
     * Los atributos que deben ser casteados
     *
     * @var array<string, string>
     */
    protected $casts = [
        'precio' => 'decimal:2',
        'stock' => 'integer',
    ];
}
