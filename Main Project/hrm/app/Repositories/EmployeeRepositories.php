<?php

namespace App\Repositories;

use App\Repositories\Interface\EmployeeInterface;
use App\Models\Admin\Employee;

class EmployeeRepositories implements EmployeeInterface {
    public function AllData(){
        return Employee::get();
    }
    public function findById($id){
        return Employee::findOrFail($id);
    }
    public function storeData($request){
        // dd($request->all());
        $employee = new Employee();

        if ($request->hasFile('image')) {
            $destinationPath= 'public/employee-image/';
            $picture      = $request->file('image');
            $fileName   = time() . '.' . $picture->getClientOriginalExtension();
            $picture->storeAs($destinationPath,$fileName);
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
    public function updateData($request, $id){
        $employee = $this->findById($id);
        if ($request->hasFile('image')) {
            $destinationPath= 'public/employee-image/';
            $picture      = $request->file('image');
            $fileName   = time() . '.' . $picture->getClientOriginalExtension();
            $picture->storeAs($destinationPath,$fileName);
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

        $employee->Update();
    }
}
