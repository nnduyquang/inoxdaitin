<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'id','name','path', 'isActive','category_order','image','user_id','created_at','updated_at'
    ];
    public function users()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
