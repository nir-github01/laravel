<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Livewire\Employee;
use App\Http\Livewire\User;

class Company extends Model
{
    use HasFactory;

    protected $fillable=[
        'company_id',
        'post_id',
        'company_name',
        'company_revenue',
        'company_post',
        'num_of_employee',
        'post_date',
        'company_id',
        'email',
        'city',
        'state',
        'zip_code',

    ];

    public function emplyees() 
    {
       return $this->hasOne(Employee::class);
    }

    public function users()
    {
     return $this->hasMany(User::class);   
    }
}
