<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'tb_contact';
    protected $primaryKey = 'ct_id';
    protected $fillable = [
        'ct_status',
        'ct_subject', 
        'ct_name', 
        'ct_lastname',
        'ct_tel',
        'ct_email', 
        'ct_content'
    ];

    
    // public $timestamps = false;
}
