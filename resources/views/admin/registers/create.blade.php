 @extends('layouts.admin')
@section('content')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Add Employee</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href=" {{ url('/admin') }}">Dashboard</a></li>
          <li class="breadcrumb-item active">Add Employee</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
    <!-- /.content-header -->



<section class="content">
  <div class="container-fluid">
    <form method="POST" action="{{ route('admin.registers.store') }}">
    	@method('POST')
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="form-group">
        <div class="row">
          <label class="col-md-3">Name</label>
          <div class="col-md-6"><input type="text" name="name" class="form-control"></div>
          <div class="clearfix"></div>
        </div>
      </div>

	<div class="form-group">
        <div class="row">
          <label class="col-md-3">Adress</label>
          <div class="col-md-6"><input type="text" name="adress" class="form-control"></div>
          <div class="clearfix"></div>
        </div>
      </div>

	<div class="form-group">
        <div class="row">
          <label class="col-md-3">Birth Day</label>
          <div class="col-md-6"><input type="text" name="birth_day" class="form-control"></div>
          <div class="clearfix"></div>
        </div>
      </div>

	<div class="form-group">
        <div class="row">
          <label class="col-md-3">Gender</label>
          <div class="col-md-6"><input type="text" name="gender" class="form-control"></div>
          <div class="clearfix"></div>
        </div>
      </div>

      <div class="form-group">
        <div class="row">
          <label class="col-md-3">Contact Number</label>
          <div class="col-md-6"><input type="text" name="phone" class="form-control"></div>
          <div class="clearfix"></div>
        </div>
      </div>

      <div class="form-group">
        <div class="row">
          <label class="col-md-3">Emergency Contact Number</label>
          <div class="col-md-6"><input type="text" name="emergency" class="form-control"></div>
          <div class="clearfix"></div>
        </div>
      </div>

      <div class="form-group">
        <div class="row">
          <label class="col-md-3">Qualification</label>
          <div class="col-md-6"><input type="text" name="qualification" class="form-control"></div>
          <div class="clearfix"></div>
        </div>
      </div>

	<div class="form-group">
        <div class="row">
          <label class="col-md-3">Post</label>
          <div class="col-md-6"><input type="text" name="post" class="form-control"></div>
          <div class="clearfix"></div>
        </div>
      </div>

      <div class="form-group">
        <div class="row">
          <label class="col-md-3">Salary</label>
          <div class="col-md-6"><input type="text" name="salary" class="form-control"></div>
          <div class="clearfix"></div>
        </div>
      </div>


      <div class="form-group">
        <input type="submit" class="btn btn-info" value="Save">
      </div>
    </form>
  </div>
</section>  


@endsection