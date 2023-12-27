<?php

// Define the namespace for this file
namespace App\Repositories;

// Import the necessary classes
use App\Repositories\Interface\EmployeeInterface;
use App\Models\Admin\Employee;

// Define the EmployeeRepositories class, which implements the EmployeeInterface
class EmployeeRepositories implements EmployeeInterface {
    // Define a method to get all employee data
    public function AllData(){
        // Return all records from the Employee model
        return Employee::get();
    }

    // Define a method to find an employee by ID
    public function findById($id){
        // Return the Employee record with the given ID, or fail if it doesn't exist
        return Employee::findOrFail($id);
    }

    // Define a method to store new employee data
    public function storeData($request){
        // Create a new Employee record
        $employee = new Employee();

        // If the request contains an image file
        if ($request->hasFile('image')) {
            // Define the destination path for the image
            $destinationPath= 'public/employee-image/';
            // Get the image file from the request
            $picture      = $request->file('image');
            // Generate a filename for the image
            $fileName   = time() . '.' . $picture->getClientOriginalExtension();
            // Store the image file at the destination path with the generated filename
            $picture->storeAs($destinationPath,$fileName);
            // Set the image attribute of the Employee record to the filename
            $employee->image = $fileName;
        }

        // Set the other attributes of the Employee record from the request
        $employee->fName = $request->fName;
        $employee->lName = $request->lName;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->address = $request->address;
        $employee->joindate = $request->joindate;
        $employee->gender = $request->gender;
        $employee->department = $request->department;

        // Save the new Employee record to the database
        $employee->save();
    }

    // Define a method to update existing employee data
    public function updateData($request, $id){
        // Find the Employee record with the given ID
        $employee = $this->findById($id);

        // If the request contains an image file
        if ($request->hasFile('image')) {
            // Define the destination path for the image
            $destinationPath= 'public/employee-image/';
            // Get the image file from the request
            $picture      = $request->file('image');
            // Generate a filename for the image
            $fileName   = time() . '.' . $picture->getClientOriginalExtension();
            // Store the image file at the destination path with the generated filename
            $picture->storeAs($destinationPath,$fileName);
            // Set the image attribute of the Employee record to the filename
            $employee->image = $fileName;
        }

        // Set the other attributes of the Employee record from the request
        $employee->fName = $request->fName;
        $employee->lName = $request->lName;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->address = $request->address;
        $employee->joindate = $request->joindate;
        $employee->gender = $request->gender;
        $employee->department = $request->department;

        // Update the Employee record in the database
        $employee->Update();
    }
}
