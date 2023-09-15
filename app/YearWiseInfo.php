<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class YearWiseInfo extends Model
{
    protected $table = 'year_wise_info';

    /**
     * @var array
     */
    protected $fillable = ['plantation_id','division_id','year','divisional_manager', 'plantation_manager', 'expenditure', 'percentage','created_at', 'updated_at' ];
}
