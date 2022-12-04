<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DynamicInputs extends Component
{
    public $inputs=[];

    public function addInputs()
    {
        $this->Inputs->push(['email' => '']);
    }

    public function removeInputs($key)
    {
        $this->Inputs->pull($key);
    }

    public function mount()
    {
        $this->fill([
         'inputs'->collect([['email' => ""]]) ,   
        ]);
    }
      
    protected $rules = [
        'inputs.*.email' => 'required',
    ];
    
    protected $messages = [
        'inputs.*.email.required' => 'This email field is required.',
    ];
    
    public function submit()
    {
        $this->validate();
    }
    public function render()
    {
        return view('livewire.dynamic-inputs');
    }
}
