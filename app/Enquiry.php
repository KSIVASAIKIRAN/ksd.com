<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'enquiry';

    /**
     * @var array
     */
    protected $fillable = ['dealer_id','lead_id','subject', 'description', 'status_id', 'type_id', 'created_at', 'created_by', 'updated_at', 'updated_by'];

    public function enquirytoenquirystatus(){
        return $this->hasMany('App\ZEnquiryStatus','id','status_id');
    }
    public function enquirytoenquirytype(){
        return $this->hasMany('App\ZEnquiryType','id','type_id');
    }

}//end of class Enquiry
