@extends('layouts.admin')

@section('content')
<section class="content-header">
      <h1>
        Employee
        <small>M.I.S</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href=" {{ url('/admin') }}"><i class="fa fa-dashboard"></i> DASHBOARD</a></li>
        <li class="active">EMPLOYEES</li>
      </ol>
    </section>
  
<section class="content">
  <div class="container-fluid">
  	<table class="table table-bordered table-striped">
  		<tr class="bg-light">
                                        <th class="text-center">Id</th>
                                        <th class="text-center">Code</th>
                                        <th class="text-center">Name</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Role</th>
                                        <th class="text-center">Joining Date</th>
                                        <th class="text-center">Address</th>
                                        <th class="text-center">Mobile Number</th>
                                        <th class="text-center">Department</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
  		@foreach($emps as $c)
  			<tr>
  				<td class="text-center">{{$i+=1}}</td>
                                        <td class="text-center">{{$emp->employee['code']}}</td>
                                        <td class="text-center">{{$emp->name}}</td>
                                        <td class="text-center">{{convertStatusBack($emp->employee['status'])}}</td>
                                        <td class="text-center">{{isset($emp->role->role->name)?$emp->role->role->name:''}}</td>
                                        <td class="text-center">{{date('Y-m-d', strtotime($emp->employee['date_of_joining']))}}</td>
                                        <td class="text-center">{{$emp->employee['current_address']}}</td>
                                        <td class="text-center">{{$emp->employee['number']}}</td>
                                        <td class="text-center">{{$emp->employee['department']}}</td>
                                        <td class="text-center">
                                            <div class="btn-group text-right">
                                                <button type="button"
                                                        class="btn btn-info br2 btn-xs fs12 dropdown-toggle"
                                                        data-toggle="dropdown" aria-expanded="false"> Action
                                                    <span class="caret ml5"></span>
                                                </button>
  			</tr>
  		@endforeach
  	</table>
  </div>
</section>	



 @endsection