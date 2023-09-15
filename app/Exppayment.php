<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exppayment extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'expenses';

    /**
     * @var array*/
    
    protected $fillable = ['parent_user_id','expense_type', 'credited_amt', 'is_credited'];  
	
  
    public function quotationtoquotationproduct(){
        return $this->hasMany('App\QuotationProduct','quotation_id','id');
    }

}//end of class Quotation
