<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\order;

class Orderfulfillment extends Component
{ 
    
     public $user_id, $title, $customername, $orderdate, $productphoto, $emailid, $journeydate, $options, $description;
     public $isOpen = 0;
     public $updateMode = false;
    //  public function mount($order)
    //  {
    //     $this->message=$order->message;
    //     $this->title=$order->title;
    //     $this->customername->$order->customername;
    //  $this->message = "Hello livewire , welcome to new learning process";
    //  } 
   //public $message = "Livewire Implementation";

    public function render()
    {
        $orders  = Order::all();
        //dd($orders);
        return view('livewire.show');
    }
     
    public function create() {
        $this->resetInputfield();
        $this->OpenModal();
    }
    public function openModal() {
        $this->isOpen=true;
    }
    
    public function closeModal() {
        $this->isOpen=false;
    }
    private function resetInputfield() {
      $this->user_id='';
      $this->title='';
      $this->customername='';
      $this->productphoto='';
      $this->emailid='';
      $this->orderdate='';
      $this->journeydate='';
      $this->options='';
      $this->description='';
    }

    public function store() {
        $this->validate ([
         'user_id'=>'required',
         'title' =>'required',
         'orderdate'=>'required',
         'journeydate' =>'required', 
         'customername'=>'required',
         'productphoto' =>'required',
         'options' =>'required',
         'emailid' => 'required',
         'description' =>'required'
        ]);

        Order::updateOrCreate(['id' => $this->user_id], [
             'title' =>$this->title,
             'customername'=>$this->customername,
             'productphoto' =>$this->productphoto,
             'options' =>$this->options,
             'emailid' =>$this->emailid,
             'orderdate' =>$this->orderdate,
             'journeydate' =>$this->journeydate,
             'description' =>$this->description,
        ]); 

        session()->flash ('message', 
        $this->user_id ? 'updated successfully.' :'created successfully.');

        $this->closeModal();
        $this->resetInputfiled();



    }
    public function edit($id) {
        $orders=Order::findOrFail($id);
        $this->user_id=$orders->user_id;
        $this->title=$orders->title;
        $this->customername=$orders->customername;
        $this->productphoto=$orders->productphoto;
        $this->emailid=$orders->emailid;
        $this->options=$orders->options;
        $this->orderdate=$orders->orderdate;
        $this->journeydate=$orders->journeydate;
        $this->description=$orders->description;

        $this->openModal();
    
    }

    public function delete() {
        Order::find($id)->delete();

        session()-> flash('message', 'Order deleted successfully');
    }
}
