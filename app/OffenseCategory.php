<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OffenseCategory extends Model
{
	use SoftDeletes;
    protected  $table = 'offense_categories';
    protected $guarded = [''];
    protected $dates = ['deleted_at'];
}
