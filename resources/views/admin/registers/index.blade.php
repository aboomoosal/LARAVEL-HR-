@extends('layouts.admin')
@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Register</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href=" {{ url('/admin') }}">Dashboard</a></li>
          <li class="breadcrumb-item active">Register</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>

<section class="content">
      <!-- Info boxes -->
	<div class="container-fluid">

	      <p>
	  		<a href="{{ route('admin.registers.create') }}" class="btn btn-primary">Add New Employee</a>
	  	</p>
	      <table class="table table-bordered table-striped">
	  		<tr>
	  			<th>ID</th>
	  			<th>Name</th>
	  			<th>Adress</th>
	  			<th>Birth Day</th>
	  			<th>Gender</th>
	  			<th>Contact Number</th>
	  			<th>Emergency Number</th>
	  			<th>Qualification</th>
	  			<th>Post</th>
	  			<th>Salary</th>
	  			<th>Action</th>
	  		</tr>
	  		@foreach($registers as $r)
	  			<tr>
	  				<td>{{ $r->id }}</td>
	  				<td>{{ $r->name }}</td>
	  				<td>{{ $r->adress }}</td>
	  				<td>{{ $r->birth_day }}</td>
	  				<td>{{ $r->gender }}</td>
	  				<td>{{ $r->phone }}</td>
	  				<td>{{ $r->emergency }}</td>
	  				<td>{{ $r->qualification }}</td>
	  				<td>{{ $r->post }}</td>
	  				<td>{{ $r->salary }}</td>
	  				<td> 
	  					   <a href="#" class="btn btn-info">Edit</a> 
	           			   <a href="#" class="btn btn-danger">Delete</a>
	           		</td>
	            </tr>
	         
	  		@endforeach
	  		</table>
	 </div>
</section>



@endsection