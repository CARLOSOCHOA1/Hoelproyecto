<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reserve
 *
 * @property $id
 * @property $name
 * @property $estado
 * @property $ciudad
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Reserve extends Model
{
    
    static $rules = [
		'name' => 'required',
		'estado' => 'required',
		'ciudad' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','estado','ciudad'];



}
