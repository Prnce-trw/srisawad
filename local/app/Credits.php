<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Credits extends Model
{
    protected $table = 'credits';

    protected $fillable = ['name','detail','image','credittype_id','download_id','qualification_id','document_id','bank_id','name_credit','select_credit'];
}
