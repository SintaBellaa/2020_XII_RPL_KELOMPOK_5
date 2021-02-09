<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
use SoftDeletes;

    protected  $table = 'offense_category';
    protected $guarded = [''];
    protected $dates = ['deleted_at'];
}
