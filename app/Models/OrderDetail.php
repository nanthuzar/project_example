<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    // protected $fillable = ['voucherno', 'totalamount','totalitem', 'orderdate', 'deliveryaddress', 'status', 'shipping_id', 'user_id', 'item_id', 'carpenter_id'];


    public function items(){
    	return $this->belongsToMany('App\Models\Item', 'item_order_detail', 'order_detail_id','item_id')->withPivot('qty');
    }

    public function carpenter(){
    	return $this->belongsTo('App\Models\Carpenter');
    }

    public function shipping(){
    	return $this->belongsTo('App\Models\Shipping');
    }

    public function user(){
    	return $this->belongsTo('App\Models\User');
    }

    // public function items(){
    //     return $this->belongsToMany('App\Models\Item', 'item_order
    //         _detail', 'order_detail_id','item_id')->withPivot('qty');
    // }

    public function order(){
        return $this->belongsTo('App\Models\Order');
    }
}



