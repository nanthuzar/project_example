<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['codeno', 'name', 'photo', 'price', 'description', 'category_id'];

    public function category(){
    	return $this->belongsTo('App\Models\Category');
    }

    public function orders(){
    	return $this->belongsToMany('App\Models\Order', 'item_order', 'item_id', 'order_id')->withPivot('qty');
    }

    public function carpenters(){
    	return $this->hasMany('App\Models\Carpenter');
    }

    public function carpenterorders(){
        return $this->belongsToMany('App\Models\CarpenterOrder', 'carpenterorder_item','carpenterorder_id','item_id')->withPivot('qty');
    }

    public function orderconfirms(){
        return $this->hasMany('App\Models\OrderConfirm');


    }
}
