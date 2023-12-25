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
    public function __construct(EmployeeInterface $employeeRepository)
    {
        $this->employeeRepository = $employeeRepository;
    }
    
    public function index()
    {       
        $employee = $this->employeeRepository->AllData();
        return view('backend.pages.employees.index',compact('employee'));
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
        $this->employeeRepository->storeData($request);
        return redirect(route('employee.index'))->with('message', 'Employee info create successfully.');
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
        // dd($id);

        $employee = $this->employeeRepository->findById($id);
        // dd($employee);
        return view('backend.pages.employees.edit',compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EmployeeRequest $request, string $id)
    {
        $this->employeeRepository->updateData($request, $id);
        return redirect(route('employee.index'))->with('message', 'Employee info update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        // dd($id);
        $employee = Employee::find($id);
        $employee->delete();
        return redirect(route('employee.index'))->with('message', 'Employee Deleted successfully.');
    }
}
