<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Carpenter extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name', 'phone', 'item_id'];

    public function orderdetails(){
    	return $this->hasMany('App\Models\Order');
    }

    public function carpenderorders(){
    	return $this->hasMany('App\Models\CarpenterOrder');
    }

    public function orderconfirm(){
    	return $this->hasOne('App\Models\Orderconfirm');
    }


}
