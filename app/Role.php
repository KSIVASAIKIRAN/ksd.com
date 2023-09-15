<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'name', 'department_id', 'description',
    ];
    public function users()
    {
        return $this
            ->belongsToMany('App\User')
            ->withTimestamps();
    }
    public function rolerelfun(){
        return $this->hasMany('App\RoleUser','role_id','id');
    }
}//end of class Role
