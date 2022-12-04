<div>
@if(session()->has('message'))
<div class="alert alert-success">
{{session('message')}}
</div>
@endif
@if($updateMode)
@include('livewire.company-data-updateform')
@else 
@include('livewire.company-data-form')
@endif

<div>
    <table class="table table-success table-striped">
       <thead> 
        <tr> 
            <th>id</th>
            <th>Company_id</th>
            <th>Post_id </th>
            <th>Number of Employee </th>
            <th>Company Revenue </th>
            <th>Company Name </th>
            <th>Email</th>
            <th>City</th>
            <th>State</th>
            <th>Zip Code</th>
            <th>Company Post</th>
            <th>Post Date</th>
            <th>Action </th>
        </tr>
       </thead>

       <tbody> 
  @foreach($companies as $key => $comp_val)
          <tr> 
            <td>{{$comp_val->id}}</td>
            <td>{{$comp_val->company_id}}</td>
            <td>{{$comp_val->post_id}} </td>
            <td>{{$comp_val->num_of_employee}} </td>
            <td>{{$comp_val->company_revenue}}</td>
            <td>{{$comp_val->company_name}} </td>
            <td>{{$comp_val->email}}</td>
            <td>{{$comp_val->city}}</td>
            <td>{{$comp_val->state}}</td>
            <td>{{$comp_val->zip_code}}</td>
            <td>{{$comp_val->company_post}}</td>
            <td>{{$comp_val->post_date}}</td>
            <td>
              <button wire:click="edit({{ $comp_val->id }})" wire:loading.class class="btn btn-primary btn-sm">Edit</button>
              <button wire:click="delete({{ $comp_val->id }})" wire:loading.class class="btn btn-danger btn-sm">Delete</button>
            </td>
          </tr>
          @endforeach
         </tbody>
      </table>
</div>
</div>
