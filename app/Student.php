<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
use SoftDeletes;

    protected  $table = 'students';
    protected $primaryKey = 'stu_id';
    protected $guarded = [''];
    protected $dates = ['deleted_at'];
}
