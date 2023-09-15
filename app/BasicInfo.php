<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BasicInfo extends Model
{
    protected $table = 'basic_info';

    /**
     * @var array
     */
    protected $fillable = ['plantation_id', 'divrange', 'series', 'year', 'rfblock', 'netarea' , 'grossarea' , 'espacement' , 'village' , 'mandal' , 'district' , 'assembly' , 'parliament', 'forestdivision', 'plantationwatcher', 'div_id', 'created_at', 'updated_at' ];
}
