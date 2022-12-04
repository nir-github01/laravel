<?php

namespace App\Models;

use App\Http\Livewire\Company;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;

    protected $fillable = [

        'post_id',
        'employee_name',
        'num_of_post',
        'email',
        'city',
        'state',
        'zip_code',
        'mobile_no',
        'post_date',
        'employee_post',
        'description',
        'path',
        'option',
        'employee_id',


    ];

    public function companies() 
    {
        return $this->belongsTo(Company::class);
    }
}
