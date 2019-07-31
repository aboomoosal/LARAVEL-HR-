

@extends('layouts.admin')
@section('content')




<section class="content-header">
      <h1>
        Add Employee
        <small>M.I.S</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href=" {{ url('/admin') }}"><i class="fa fa-dashboard"></i> DASHBOARD</a></li>
        <li class="active">Add Employees</li>
      </ol>
    </section>
    <!-- /.content-header -->


<section class="content">
  <div class="container-fluid">
    <form method="post" action="{{ route('emps.store') }}">


      


      




      <div class="form-group">
        <div class="row">
          <label class="col-md-3">Code</label>
          <div class="col-md-6"><input type="text" name="code" class="form-control"></div>
          <div class="clearfix"></div>
        </div>
      </div>
     

      <div class="form-group">
        <div class="row">
          <label class="col-md-3">Name</label>
          <div class="col-md-6"><input type="text" name="name" class="form-control"></div>
          <div class="clearfix"></div>
        </div>
      </div>
     



      <div class="form-group">
        <div class="row">
            <label class="col-md-3">Gender:</label>
            <div class="col-md-6">
             <input type="radio" name="gender" value="male"> Male<br>
     <input type="radio" name="gender" value="female"> Female<br>           
            </div>    
      </div>

      </div>

      <div class="form-group">
        <div class="row">
          <label class="col-md-3">Date Of Birth</label>
          <div class="col-md-6"><input type="text" name="date_of_birth" class="form-control"></div>
          <div class="clearfix"></div>
        </div>
      </div>

<div class="form-group">
        <div class="row">
          <label class="col-md-3">Date Of Joining</label>
          <div class="col-md-6"><input type="text" name="date_of_joining" class="form-control"></div>
          <div class="clearfix"></div>
        </div>
      </div>

<div class="form-group">
        <div class="row">
          <label class="col-md-3">Phone Number</label>
          <div class="col-md-6"><input type="text" name="number" class="form-control"></div>
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
          <label class="col-md-3">Emergency Number</label>
          <div class="col-md-6"><input type="text" name="emergency_number" class="form-control"></div>
          <div class="clearfix"></div>
        </div>
      </div>


<div class="form-group">
        <div class="row">
          <label class="col-md-3">Current Adress</label>
          <div class="col-md-6"><input type="text" name="current_address" class="form-control"></div>
          <div class="clearfix"></div>
        </div>
      </div>

<div class="form-group">
        <div class="row">
          <label class="col-md-3">Permanant Adress</label>
          <div class="col-md-6"><input type="text" name="permanent_address" class="form-control"></div>
          <div class="clearfix"></div>
        </div>
      </div>


<div class="form-group">
        <div class="row">
          <label class="col-md-3">Offer Acceptence</label>
          <div class="col-md-6"><input type="text" name="offer_acceptance" class="form-control"></div>
          <div class="clearfix"></div>
        </div>
      </div>
<div class="form-group">
        <div class="row">
          <label class="col-md-3">Probation Period</label>
          <div class="col-md-6"><input type="text" name="probation_period" class="form-control"></div>
          <div class="clearfix"></div>
        </div>
      </div>
<div class="form-group">
        <div class="row">
          <label class="col-md-3">Date Of Confirmation</label>
          <div class="col-md-6"><input type="text" name="date_of_confirmation" class="form-control"></div>
          <div class="clearfix"></div>
        </div>
      </div>


<div class="form-group">
        <div class="row">
          <label class="col-md-3">Department</label>
          <div class="col-md-6"><input type="text" name="department" class="form-control"></div>
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
        <div class="row">
          <label class="col-md-3">Account Number</label>
          <div class="col-md-6"><input type="text" name="account_number" class="form-control"></div>
          <div class="clearfix"></div>
        </div>
      </div>

<div class="form-group">
        <div class="row">
          <label class="col-md-3">Bank Name</label>
          <div class="col-md-6"><input type="text" name="bank_name" class="form-control"></div>
          <div class="clearfix"></div>
        </div>
      </div>

<div class="form-group">
        <div class="row">
          <label class="col-md-3">ID Number</label>
          <div class="col-md-6"><input type="text" name="ID_number" class="form-control"></div>
          <div class="clearfix"></div>
        </div>
      </div>

<div class="form-group">
        <div class="row">
          <label class="col-md-3">Date Of Resignation</label>
          <div class="col-md-6"><input type="text" name="date_of_resignation" class="form-control"></div>
          <div class="clearfix"></div>
        </div>
      </div>

<div class="form-group">
        <div class="row">
          <label class="col-md-3">Notice Period</label>
          <div class="col-md-6"><input type="text" name="notice_period" class="form-control"></div>
          <div class="clearfix"></div>
        </div>
      </div>

<div class="form-group">
        <div class="row">
          <label class="col-md-3">Last Working Day</label>
          <div class="col-md-6"><input type="text" name="last_working_day" class="form-control"></div>
          <div class="clearfix"></div>
        </div>
      </div>

     

        <input type="submit" class="btn btn-info" value="Save">
      </div>
    </form>
  </div>
</section>  


  </body>

@endsection

