<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OffenseCategory extends Model
{
    protected  $table = 'offense';
    protected $guarded = [''];
    protected $dates = ['deleted_at'];
}
