<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The attributes that are mass assignable
     * @var array
     */
    protected $fillable = [
    	'title',
    	'content',
    	'user_id',
        'category_id',
    	'create_at',
    	'created_at',
    ];

    /**
     * This attribute is primary key of user table
     * @var string
     */
    public $primaryKey  = 'post_id';
    
    /**
     * A post belongs to a user
     * @return [type] [description]
     */
    public function user(){
        return $this->belongsTo('user');
    }

    /**
     * [category description]
     * @return [type] [description]
     */
    public function category(){
        return $this->belongsTo('category');
    }
}
