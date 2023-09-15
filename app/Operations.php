<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operations extends Model
{
     protected $table = 'operations_in_plantation';

    /**
     * @var array
     */
    protected $fillable = ['plant_id', 'div_id', 'year', 'before_sunheap_sowing_phy', 'before_sunheap_sowing_fin', 'sunheap_sowing_phy' , 'sunheap_sowing_fin' , 'pback_sunheapcrop_phy' , 'pback_sunheapcrop_fin' , 'ferilizer_phy' , 'ferilizer_fin' , 'circular_phy' , 'circular_fin', 'lweeding_phy', 'lweeding_fin', 'ptb_capilaries_phy', 'ptb_capilaries_fin', 'cc_ploughing_phy' , 'cc_ploughing_fin', 'harvesting_month', 'first_coppi_cutti_phy', 'first_coppi_cutti_fin', 'second_coppi_cutti_phy', 'second_coppi_cutti_fin','ft_operations_phy','ft_operations_fin','created_at','updated_at'];
}
