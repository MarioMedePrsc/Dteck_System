<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Venta
 *
 * @property $id
 * @property $folio
 * @property $id_cliente
 * @property $id_usuario
 * @property $fecha_creacion
 * @property $subtotal
 * @property $total_iva
 * @property $total
 * @property $id_estatus
 * @property $created_at
 * @property $updated_at
 * @property $total_unidades
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Venta extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['folio', 'id_cliente', 'id_usuario', 'fecha_creacion', 'subtotal', 'total_iva', 'total', 'id_estatus', 'total_unidades'];



}
