<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CarpenterOrder extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['carpenter_id','item_id','status', 'due_date'];

    // public function orderconfirms(){
    // 	return $this->hasMany('App\Models\Orderconfirm');
    // }

    public function carpenter(){
        return $this->belongsTo('App\Models\Carpenter');
    }

    // public function items(){
    //     return $this->belongsToMany('App\Models\Item', 'carpenterorder_item', 'carpenterorder_id', 'item_id')->withPivot('qty');
    // }

    public function item(){
        return $this->belongsTo('App\Models\Item');
    }

    // public function status(){
    //     return $this->hasOne('App\Models\Status');
    // }

    public function orderconfirm(){
        return $this->hasOne('App\Models\OrderConfirm');
    }

}
