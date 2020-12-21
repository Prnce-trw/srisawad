<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Typecredits extends Model
{
    protected $table = 'typecredits';

    protected $fillable = ['name','image'];
}
