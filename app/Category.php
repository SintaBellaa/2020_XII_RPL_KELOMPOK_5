<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
use SoftDeletes;

    protected  $table = 'offense_categories';
    protected $primaryKey = 'ofc_id';
    protected $guarded = [''];
    protected $dates = ['deleted_at'];
}
