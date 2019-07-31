<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Attendences;

class AttendenceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$arr['attendence'] = Attendences::all();
        return view('admin.attendence.index')->with($arr);
    }
}
