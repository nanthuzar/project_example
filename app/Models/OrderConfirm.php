<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderConfirm extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['carpenter_id','item_id','qty', 'due_date', 'confirm_date', 'status'];

    public function carpenter(){
        return $this->belongsTo('App\Models\Carpenter');
    }

     public function item(){
        return $this->belongsTo('App\Models\Item');
    }
}
