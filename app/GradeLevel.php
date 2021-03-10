<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GradeLevel extends Model
{
	use SoftDeletes;
	
    protected  $table = 'grade_levels';
    protected $primaryKey = 'grd_id';
    protected $guarded = [''];
    protected $dates = ['deleted_at'];
 
}
