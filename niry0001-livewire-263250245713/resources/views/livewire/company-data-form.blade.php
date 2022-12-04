<div class="container">
    <form class="row g-3" style="margin-top: 5%" wire:submit.prvent="submit">
        <div class="row">
            <div class="col">
              <input type="number" class="form-control" placeholder="Company_id" aria-label="Company Id" wire:model="company_id">
            </div>
          </div>
        <div class="col-md-6">
          <label for="inputNumber" class="form-label">Post Id</label>
          <input type="number" class="form-control" id="inputPostId" wire:model="post_id">
        </div>
        <div class="col-md-6">
          <label for="inputNumber" class="form-label">Number of Employee</label>
          <input type="number" class="form-control" id="inputNumber" wire:model="num_of_employee">
          @error("num_of_employee") <span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <div class="col-12">
          <label for="inputRevenue" class="form-label">Company Revenue</label>
          <input type="number" class="form-control" id="inputRevenue" placeholder="Company Revenue" wire:model="company_revenue" >
          @error('company_revenue') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <div class="col-12">
            <label for="inputName" class="form-label">Company Name</label>
            <input type="text" class="form-control" id="inputRevenue" placeholder="Company Name" wire:model="company_name">
            @error('company_name') <span class="text-danger">{{ $message }}</span>@enderror
          </div>
          <div class="col-12">
            <label for="inputRevenue" class="form-label">Post Date</label>
            <input type="date" class="form-control" id="inputRevenue" placeholder="Post Date" wire:model='post_date'>
            @error('post_date') <span class="text-danger">{{ $message }}</span>@enderror
          </div>
        <div class="col-12">
          <label for="inputPost" class="form-label">Company Post</label>
          <input type="url" class="form-control" id="inputPost" placeholder="Company Post" wire:model='company_post' >
          @error('company_post') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <div class="col-md-6">
          <label for="inputCity" class="form-label">City</label>
          <input type="text" class="form-control" id="inputCity" wire:model='city' >
          @error('city') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <div class="col-md-4">
          <label for="inputState" class="form-label">State</label>
          <select id="inputState" class="form-select" wire:model="state">
            <option selected>Choose...</option>
            <option>Uttrakhand</option>
            <option>Jharkand</option>
            <option>Udisha</option>
          </select>
        </div>
      
        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              Check me out
            </label>
          </div>
        </div>
        {{-- <div class="col-12">
          <button type="submit" class="btn btn-primary">Sign in</button>
        </div> --}}
        <div class="col-12">
          <button type="submit"  class="btn btn-success" >Save</button>
        </div>
    </form>    
</div>