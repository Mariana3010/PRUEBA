<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cita
 *
 * @property $id
 * @property $Nombre
 * @property $Raza
 * @property $Edad
 * @property $Motivo_Cita
 * @property $Fecha_Cita
 * @property $Propietario
 * @property $Imagen
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cita extends Model
{
    
    static $rules = [
		'Nombre' => 'required',
		'Raza' => 'required',
		'Edad' => 'required',
		'Motivo_Cita' => 'required',
		'Fecha_Cita' => 'required',
		'Propietario' => 'required',
		'Imagen' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre','Raza','Edad','Motivo_Cita','Fecha_Cita','Propietario','Imagen'];



}
