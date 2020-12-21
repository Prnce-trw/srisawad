<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'new';

    protected $fillable = ['name','detail','image'];
}
