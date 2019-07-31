<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Leave;

class LeavesController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$arr['leaves'] = Leave::all();
        return view('admin.leaves.index')->with($arr);
    }
}
