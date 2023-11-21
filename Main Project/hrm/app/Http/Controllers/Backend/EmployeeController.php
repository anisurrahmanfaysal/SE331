<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Admin\EmployeeRequest;
use App\Http\Controllers\Controller;
use App\Models\Admin\Employee;
use Illuminate\Http\Request;
use App\Repositories\Interface\EmployeeInterface;

class EmployeeController extends Controller
{
    protected $employeeRepository;
    public function __construct(EmployeeInterface $companyRepository)
    {
        $this->employeeRepository = $companyRepository;
    }
    
    public function index()
    {        
        return view('backend.pages.employees.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.employees.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EmployeeRequest $request)
    {
        $employee = new Employee();

        if ($request->hasFile('picture')) {
            $destinationPath= 'public/employee-picture/';
            $image      = $request->file('picture');
            $fileName   = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs($destinationPath,$fileName);
            $employee->image = $fileName;

        }
        $employee->fName = $request->fName;
        $employee->lName = $request->lName;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->address = $request->address;
        $employee->joindate = $request->joindate;
        $employee->gender = $request->gender;
        $employee->department = $request->department;

        $employee->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
