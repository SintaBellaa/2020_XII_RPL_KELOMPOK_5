<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OffenseCategory extends Model
{
    protected  $table = 'offense_categories';
    protected $guarded = [''];
    protected $dates = ['deleted_at'];
}
