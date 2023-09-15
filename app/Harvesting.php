<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Harvesting extends Model
{
     protected $table = 'harvesting_info';

    /**
     * @var array
     */
    protected $fillable = ['division_id', 'plantation_id', 'rotation_year', 'no_of_seedings', 'survival_percent', 'average_girth' , 'pulp_est_yield' , 'pulp_act_yield' , 'faggot_est_yield' , 'faggot_act_yield' , 'props_est_yield' , 'props_act_yield' , 'bark_est_yield', 'bark_act_yield', 'fuel_wood_est_yield', 'fuel_wood_act_yield', 'others_est_yield', 'others_act_yield' , 'purchaser_of_pulpwood', 'sale_price_per_mt', 'rr_pulp', 'rr_faggot_wood', 'rr_props', 'rr_bark','rr_fuel_wood','rr_others_mention1','rr_others_mention2','total_revenue_realised','expenditure_incurred','cost_benefit_ratio','remarks','created_at','updated_at'];
}
