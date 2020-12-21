<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contactor extends Model
{
    protected $table = 'contactor';

    protected $fillable = ['name','image'];
}
