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

    // public function orders(){
    // 	return $this->belongsToMany('App\Models\Order', 'item_order', 'item_id', 'order_id')->withPivot('qty');
    // }

    public function carpenters(){
    	return $this->hasMany('App\Models\Carpenter');
    }

    public function carpenterorders(){
        return $this->belongsToMany('App\Models\CarpenterOrder', 'carpenterorder_item','carpenterorder_id','item_id')->withPivot('qty');
    }

    public function orderconfirm(){
        return $this->hasOne('App\Models\OrderConfirm');
    }

    public function orderdetails(){
        return $this->belongsToMany('App\Models\OrderDetail', 'item_order_detail', 'item_id', 'order_detail_id')->withPivot('qty');
    }

    // public function items(){
    //     return $this->belongsToMany('App\Models\Item', 'item_order
    //         _detail', 'order_detail_id','item_id')->withPivot('qty');
    // }
}
