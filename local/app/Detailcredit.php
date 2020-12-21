<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detailcredit extends Model
{
    protected $table = 'detailcredit';

    protected $fillable = ['name','detail','image'];
}
