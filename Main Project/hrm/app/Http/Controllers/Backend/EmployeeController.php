<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Admin\EmployeeRequest;
use App\Http\Controllers\Controller;
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
