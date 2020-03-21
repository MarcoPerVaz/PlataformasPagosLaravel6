<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentPlatform extends Model
{
    /**
     * [The attributes that are masss assignable]
     *
     * @var [array]
     */
    protected $fillable = ['name', 'image'];
}
