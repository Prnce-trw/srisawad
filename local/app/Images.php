<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    protected $table = 'tb_images';
    protected $primaryKey = 'im_id';
    protected $fillable = ['im_path','im_link'];

    public $timestamps = false;
}
