<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoleUser extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'role_user';

    /**
     * @var array
     */
    protected $fillable = ['role_id', 'user_id', 'created_at', 'created_by', 'updated_at', 'updated_by'];


    public function userrolerelfun(){
        return $this->hasMany('App\User','id','user_id');
    }
    public function getrolefun(){
        return $this->hasMany('App\Role','id','role_id');
    }


}//end of RoleUser
