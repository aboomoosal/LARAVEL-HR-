<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Register;

class RegistersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

    	$arr['registers'] = Register::all();
        return view('admin.registers.index')->with($arr);
    }
}
