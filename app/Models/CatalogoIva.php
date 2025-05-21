<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CatalogoIva
 *
 * @property $id
 * @property $tasa_iva
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CatalogoIva extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['tasa_iva'];



}
