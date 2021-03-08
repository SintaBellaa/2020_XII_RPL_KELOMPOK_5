<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offense extends Model
{

    protected  $table = 'offenses';
    protected $primaryKey = 'ofs_id';
    protected $guarded = [''];
}
