<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Auth\Authenticatable;

use Illuminate\Auth\Passwords\CanResetPassword;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable;
    use CanResetPassword;
    /**
    * The attributes that are mass assignable
    *
    * @var array
    */
    protected $fillable = [
        'username', 'password', 'email', 'facebookId' , 'role', 'create_at', 'created_at', 'updated_at'
    ];

    /**
     * This attribute is primary key of user table
     * @var string
     */
    public $primaryKey = 'user_id';


    /**
     * The attributes that excluded from the model's JSON from
     * @var array
     */
    protected $hidden =['password', 'remember_token'];

    /**
     * A user has many posts on site
     * @return $this->hasMany('App\Post')
     */
    public function posts(){
        return $this->hasMany('App\Post');
    }
}
