<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paymentmethods extends Model
{
    protected $table = 'paymentmethod';

    protected $fillable = ['name'];
}
