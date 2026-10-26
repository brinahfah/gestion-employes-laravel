<?php

namespace App\Http\Controllers;

use Illuminate\Http\Employee;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EmployeeController extends Controller
{
    public function index (): View {

    $employee = \App\Models\Employee::all();
        return  view('employee.index', compact('employee'));
    }
}

