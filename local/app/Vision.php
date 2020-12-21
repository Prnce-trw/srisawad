<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vision extends Model
{
    protected $table = 'vision';

    protected $fillable = ['name','detail','image'];
}
