<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeesController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$arr['emloyees'] = Employee::all();
        return view('admin.employees.index')->with($arr);
    }
}
