<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Company;

class CompanyData extends Component
{
    public $companies, $num_of_employee,$post_id, $company_id, $company_revenue, $company_name, $email, $city, $state, $zip_code, $company_post, $post_date;
    public $updateMode = false;
    public function render()
    {
        $this->companies = Company::all();
      // dd($this->companies);
        return view('livewire.users');
        // return view('livewire.company-data');
       
    }

    public function resetInputFields() 
    {
        $this->num_of_employee = '';
        $this->company_revenue = '';
        $this->company_name = '';
        $this->email = '';
        $this->city = '';
        $this->state = '';
        $this->company_post = '';
        $this->post_date = '';
    }

    public function submit()
    {
         $validatedata = $this->validate([
            'company_id' => 'required',
            'post_id' => 'required',
            'num_of_employee' => 'required',
            'company_revenue' => 'required',
            'company_name' => 'required',
            'email' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip_code' => 'required',
            'company_post' => 'required',
            'post_date' => 'required',
        ]);
        Company::create([$validatedata],[
        'company_id' => $this->company_id,
        'post_id' => $this->post_id,
        'num_of_employee' => $this->num_of_employee,
        'company_revenue' => $this->company_revenue,
        'company_name' => $this->company_name,
        'email' => $this->email,
        'city' => $this->city,
        'state' => $this->state,
        'zip_code' => $this->zip_code,
        'company_post' => $this->company_post,
        'post_date' => $this->post_date,  
       ]);
    
        session()->flash('message', 'This post is created successfully');
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $companies = Company::find($id);
        $this->company_id = $id;
        $this->num_of_employee = $companies->num_of_employee;
        $this->company_revenue = $companies->company_revenue;
        $this->company_name = $companies->company_name;
        $this->email = $companies->email;
        $this->city = $companies->city;
        $this->state = $companies->state;
        $this->company_post = $companies->company_post;
        $this->post_date = $companies->post_date;

        $this->updateMode = true;
    }
    public function update()
    {
         $this->validate([
            'num_of_employee' => 'required',
            'company_revenue' => 'required',
            'company_name' => 'required',
            'email' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip_code' => 'required',
            'company_post' => 'required',
            'post_date' => 'required',
        ]);
        $companies = Company::find($this->company_id);
        $companies->update([
            'num_of_employee' => $this->num_of_employee,
            'company_revenue' => $this->company_revenue,
            'company_name' => $this->company_name,
            'email' => $this->email,
            'city' => $this->city,
            'state' => $this->state,
            'zip_code' => $this->zip_code,
            'company_post' => $this->company_post,
            'post_date' => $this->post_date,

        ]);

        $this->updateMode =false;

        session()->flash('message', 'This post is updated successfully');
        $this->resetInputFields();
    }

    public function delete($id)
    {
        Company::find($id)->delete();
        session()->flash('message', 'This post is deleted successfully');
    }
}
