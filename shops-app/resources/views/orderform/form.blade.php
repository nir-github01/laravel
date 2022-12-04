<!DOCTYPE html>
<html>
<head>
<title>Laravel 9 Form Validation</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
@if(session('status'))
<div class="alert alert-success">
{{ session('status') }}
</div>
@endif
<div class="card">
<div class="card-header text-center font-weight-bold">
<h2>Laravel 9 Form Validation</h2>
</div>
<div class="card-body">
<form name="employee" id="employee" method="post" action="{{url('store-form')}}">
{{ csrf_field() }}
<div class="form-group">
<label for="exampleInputEmail1">User id</label>
<input type="text" id="userid" name="userid" class="@error('name') is-invalid @enderror form-control">
@error('name')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>        
<div class="form-group">
<label for="exampleInputEmail1">Order Title</label>
<input type="email" id="order" name="order" class="@error('order') is-invalid @enderror form-control">
@error('order')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>        
<div class="form-group">
<label for="exampleInputEmail1">Shipping Address</label>
<input type="number" id="sadd" name="sadd" class="@error('sadd') is-invalid @enderror form-control">
@error('sadd')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>        
<div class="form-group">
<label for="exampleInputEmail1">Delivery date</label>
<input type="number" id="delivdate" name="delivdate" class="@error('delivdate') is-invalid @enderror form-control">
@error('delivdate')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>  
</body>
</html>