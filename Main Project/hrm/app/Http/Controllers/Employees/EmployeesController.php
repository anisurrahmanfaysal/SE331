<?php

namespace App\Http\Controllers\Employees;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function index(){
        return view('backend.pages.employees.index');
    }
}