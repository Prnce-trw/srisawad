<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Logomember extends Model
{
    protected $table = 'logomember';

    protected $fillable = ['name','detail','image'];
}
