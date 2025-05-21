<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VentaDetalle
 *
 * @property $id
 * @property $id_venta
 * @property $id_servicio
 * @property $id_equipo
 * @property $cantidad
 * @property $costo_unidad
 * @property $tasa_iva
 * @property $iva
 * @property $subtotal
 * @property $total
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class VentaDetalle extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_venta', 'id_servicio', 'id_equipo', 'cantidad', 'costo_unidad', 'tasa_iva', 'iva', 'subtotal', 'total'];



}
