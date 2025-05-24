<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\VentaDetalle;
use App\Models\ServicioEstatus;

/**
 * Class ServicioRealizado
 *
 * @property $id
 * @property $id_venta_detalle
 * @property $id_estatus
 * @property $fecha_inicio
 * @property $fecha_fin
 * @property $notas
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ServicioRealizado extends Model
{
    
    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_venta_detalle', 'id_estatus', 'fecha_inicio', 'fecha_fin', 'notas'];
    public function ventaDetalle()
    {
        return $this->belongsTo(VentaDetalle::class, 'id_venta_detalle');
    }
    public function estatus()
{
    return $this->belongsTo(ServicioEstatus::class, 'id_estatus');
}




}
