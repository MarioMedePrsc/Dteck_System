<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\CatalogoIva;

/**
 * Class Articulo
 *
 * @property $id
 * @property $descripcion
 * @property $id_tipo
 * @property $id_iva
 * @property $costo_unidad
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Articulo extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['descripcion', 'id_tipo', 'id_iva', 'costo_unidad'];

    public function iva()
    {
        return $this->belongsTo(CatalogoIva::class, 'id_iva');
    }




}
