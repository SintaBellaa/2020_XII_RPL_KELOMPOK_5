<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Major extends Model
{

    protected  $table = 'majors';
    protected $primaryKey = 'mjr_id';
    protected $guarded = [''];
 
}
