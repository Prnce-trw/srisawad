<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Typecredit extends Model
{
    protected $table = 'typecredit';

    protected $fillable = ['name','image'];
}
