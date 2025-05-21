<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Equipo
 *
 * @property $id
 * @property $id_cliente
 * @property $id_tipo
 * @property $id_marca
 * @property $modelo
 * @property $numero_serie
 * @property $descripcion
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Equipo extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_cliente', 'id_tipo', 'id_marca', 'modelo', 'numero_serie', 'descripcion'];



}
