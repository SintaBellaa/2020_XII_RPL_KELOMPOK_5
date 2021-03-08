<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GradeLevel extends Model
{

    protected  $table = 'grade_levels';
    protected $primaryKey = 'grd_id';
    protected $guarded = [''];
 
}
