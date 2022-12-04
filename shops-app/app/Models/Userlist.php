<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userlist extends Model
{
    use HasFactory;
    protected  $fillable= [
        'user_id',
        'order_title',
        'num_of_items',
        'Delivery_Date',
        'shipping_address',
        'zipcode',
        'shipping_state',
       ];
}
