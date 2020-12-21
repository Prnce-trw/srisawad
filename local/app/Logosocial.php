<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Logosocial extends Model
{
    protected $table = 'logosocial';

    protected $fillable = ['name','detail','image'];
}
