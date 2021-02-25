<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderConfirm extends Model
{
    use HasFactory;

    public function item(){
        return $this->belongsTo('App\Models\Item');
    }

    public function carpenter(){
        return $this->belongsTo('App\Models\Carpenter');
    }

     public function status(){
        return $this->belongsTo('App\Models\Status');
    }
}
