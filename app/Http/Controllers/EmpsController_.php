<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\emp;

class EmpsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arr['emps'] = emp::all();
        return view('admin.employees.index')->with($arr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $arr['emps'] = emp::all();
        return view('admin.employees.add')->with($arr);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, emp $emp)
    {
    
        
   
    
        $emps->name                 = $request->emp_name;
        $emp->code                 = $request->emp_code;
        $emp->status               = $request->emp_status;
        $emp->gender               = $request->gender;
        $emp->date_of_birth        = date_format(date_create($request->dob), 'Y-m-d');
        $emp->date_of_joining      = date_format(date_create($request->doj), 'Y-m-d');
        $emp->number               = $request->number;
        $emp->qualification        = $request->qualification;
        $emp->emergency_number     = $request->emergency_number;

        $emp->current_address      = $request->current_address;
        $emp->permanent_address    = $request->permanent_address;
      
        $emp->offer_acceptance     = $request->offer_acceptance;
        $emp->probation_period     = $request->probation_period;
        $emp->date_of_confirmation = date_format(date_create($request->date_of_confirmation), 'Y-m-d');
        $emp->department           = $request->department;
        $emp->salary               = $request->salary;
        $emp->account_number       = $request->account_number;
        $emp->bank_name            = $request->bank_name;
     
        $emp->ID_number            = $request->ID_number;

        $emp->date_of_resignation  = date_format(date_create($request->date_of_resignation), 'Y-m-d');
        $emp->notice_period        = $request->notice_period;
        $emp->last_working_day     = date_format(date_create($request->last_working_day), 'Y-m-d');

     
        $emp->save();
       return redirect()->route('admin.employees.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
