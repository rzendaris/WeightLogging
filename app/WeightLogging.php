<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WeightLogging extends Model
{
    protected $table ='weight_log';
    protected $fillable =[
        'date',
		'max',
        'min',
		'variance'
        
      ];
}
