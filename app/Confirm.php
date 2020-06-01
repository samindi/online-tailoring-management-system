<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Confirm extends Model
{
    protected $table = 'confirm';
    protected $fillable = ['order_id','status','email'];
    
}
