<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['voucherno', 'totalamount','totalitem', 'orderdate', 'deliveryaddress', 'status', 'shipping_id', 'user_id', 'item_id', 'carpenter_id'];

    public function carpenter(){
    	return $this->belongsTo('App\Models\Carpenter');
    }

    public function shipping(){
    	return $this->belongsTo('App\Models\Shipping');
    }

    // public function items(){
    // 	return $this->belongsToMany('App\Models\Item', 'item_order', 'order_id','item_id')->withPivot('qty');
    // }

    public function user(){
    	return $this->belongsTo('App\Models\User');
    }

    public function orderdetails(){
        return $this->hasMany('App\Models\OrderDetail');
    }
}
