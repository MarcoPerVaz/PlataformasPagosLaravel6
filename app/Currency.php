<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    protected $primaryKey = 'iso'; /* Usa el campo iso como clave primaria */

    public $incrementing = false; /* Evita que el id sea autoincrementable */

    /**
     * [That attributes that are mass assignable]
     *
     * @var [array]
     */
    protected $fillable = [
        'iso' /* Campo para el símbolo de la moneda */
    ]; 
}
