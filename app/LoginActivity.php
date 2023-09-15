<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoginActivity extends Model
{
    protected $table = 'login_activities';

    /**
     * @var array
     */
    protected $fillable = ['user_id', 'email', 'user_agent', 'ip_address', 'status', 'created_at', 'updated_at' ];
}
