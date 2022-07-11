<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable =[
        'name',
        'ci',
        'phone',
        'email',
        'address',
    ];
}
