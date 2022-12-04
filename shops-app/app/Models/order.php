<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable  = [
            'id',
            'title',
            'orderdate',
            'customername',
            'productphoto',
            'user_id',
            'emailid',
            'journeydate',
            'options',
            'description'

    ];
}
