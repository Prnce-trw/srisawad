<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newsbanner extends Model
{
    protected $table = 'newbanner';

    protected $fillable = ['name','image'];
}
