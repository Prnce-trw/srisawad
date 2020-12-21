<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Logobank extends Model
{
    protected $table = 'logobank';

    protected $fillable = ['image','upload_file'];
}
