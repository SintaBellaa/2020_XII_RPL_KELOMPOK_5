<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Offense extends Model
{
	use SoftDeletes;
	
    protected  $table = 'offenses';
    protected $primaryKey = 'ofs_id';
    protected $guarded = [''];
    protected $dates = ['deleted_at'];
}
