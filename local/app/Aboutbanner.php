<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aboutbanner extends Model
{
    protected $table = 'aboutbanner';

    protected $fillable = ['name','name_detail','detail','image'];
}
