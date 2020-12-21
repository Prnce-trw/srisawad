<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Downloaddoc extends Model
{
    protected $table = 'downloaddoc';

    protected $fillable = ['name','detail','image'];
}
