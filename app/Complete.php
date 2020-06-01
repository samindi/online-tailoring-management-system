<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complete extends Model
{
    protected $table = 'complete';
    protected $fillable = ['order_id','status','email','price','image'];
    //
}
