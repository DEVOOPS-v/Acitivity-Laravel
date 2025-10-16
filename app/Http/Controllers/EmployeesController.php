<?php

namespace App\Http\Controllers;

use App\Models\Employees;

class EmployeesController extends Controller
{
public function index()
{
    $employees = Employees::with(['department', 'position'])->get();
    return view('employees.index', compact('employees'));
}

}
