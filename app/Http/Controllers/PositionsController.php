<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departments;
use App\Models\Positions;
// use App\Models\Employees;


class PositionsController extends Controller
{

      public function index()
    {
        $departments = Departments::with(['employees', 'manager'])->get();
        return view('employees.index', compact('employees'));
    }
    //
}
