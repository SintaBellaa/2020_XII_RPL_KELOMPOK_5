<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class ClassModel extends Model
{

    protected  $table = 'class';
    protected $primaryKey = 'cls_id';
    protected $guarded = [''];
    
}
