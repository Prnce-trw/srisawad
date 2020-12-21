<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CreditContact extends Model
{
    protected $table = 'tb_credit';
    protected $primaryKey = 'cd_id';
    protected $fillable = [
        'cd_name',
        'cd_lastname', 
        'cd_card', 
        'cd_tel',
        'cd_email',
        'cd_province', 
        'cd_jobs',
        'cd_salary', 
        'cd_year',
        'cd_month', 
    ];

    
    // public $timestamps = false;
}
