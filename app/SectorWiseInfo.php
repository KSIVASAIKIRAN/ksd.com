<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SectorWiseInfo extends Model
{
    protected $table = 'sector_wise_plantation_info';

    /**
     * @var array
     */
    protected $fillable = ['plant_id','sector_no', 'area', 'clone', 'seedlings', 'div_id', 'created_at', 'updated_at' ];
}
