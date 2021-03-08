<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class ClassModel extends Model
{
 use SoftDeletes;

    protected  $table = 'class';
    protected $primaryKey = 'cls_id';
    protected $guarded = [''];
    protected  $dates = ['deleted_at'];

}
