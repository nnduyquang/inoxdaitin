<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'id','name','path', 'isActive','category_order','content','image','category_id','user_id','created_at','updated_at'
    ];
    public function users()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
    public function category()
    {
        return $this->belongsTo('App\Category', 'category_id');
    }
}
