<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articlebanner extends Model
{
    protected $table = 'articlebanner';

    protected $fillable = ['name','image'];
}
