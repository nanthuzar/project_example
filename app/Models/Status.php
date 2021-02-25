<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function carpenterorder(){
    	return $this->belongsTo('App\Models\CarpenterOrder');
    }

    public function orderconfirm(){
    	return $this->hasOne('App\Models\OrderConfirm');
    }
}
