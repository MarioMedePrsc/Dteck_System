<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\VentaDetalle;
use App\Models\Cliente;
use App\Models\User;
use App\Models\VentaEstatus;


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
    protected $fillable = ['folio', 'id_cliente', 'id_usuario', 'fecha_creacion', 'subtotal', 'total_iva', 'total', 'id_estatus'];



    public static function actualizarCabecera(int $idVenta): void
    {
        $totales = VentaDetalle::where('id_venta', $idVenta)
                    ->selectRaw('
                        SUM(iva) as total_iva, 
                        SUM(subtotal) as subtotal, 
                        SUM(total) as total, 
                        SUM(cantidad) as total_unidades
                    ')
                    ->first();

        $venta = self::find($idVenta);

        if ($venta) {
            $venta->total_iva      = $totales->total_iva ?? 0;
            $venta->subtotal       = $totales->subtotal ?? 0;
            $venta->total          = $totales->total ?? 0;
            $venta->total_unidades = $totales->total_unidades ?? 0;
            $venta->save();
        }
    }
    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'id_cliente');
    }

    public function usuario()
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }

    public function estatus()
    {
        return $this->belongsTo(VentaEstatus::class, 'id_estatus');
    }


}
