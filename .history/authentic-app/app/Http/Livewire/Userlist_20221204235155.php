<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class Userlist extends Component
{
    public $users;

    public function render()
    {
         $users =User::get()->toArray();
         
        return view('livewire.userlist');
    }
}
