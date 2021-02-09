<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Offense extends Model
{
    use SoftDeletes;

    protected  $table = 'offense';
    protected $guarded = [''];
    protected $dates = ['deleted_at'];
}
