<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contactorfooter extends Model
{
    protected $table = 'contactorfooter';

    protected $fillable = ['name','detail'];
}
