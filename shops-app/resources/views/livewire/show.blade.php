<div>
    @if($updateMode)
        @include('livewire.update')
    @else
        @include('livewire.create')
    @endif
    <table class="table table-bordered mt-5">
        <thead>
            <tr>
                <th>No.</th>
                <th>Id</th>
                <th>User Id</th>
                <th>Title</th>
                <th>Customer Name</th>
                <th>Product Photo</th>
                <th>Options</th>
                <th>Email Id</th>
                <th>Order Date </th>
                <th>Journey Date </th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
    
    </table>
</div>