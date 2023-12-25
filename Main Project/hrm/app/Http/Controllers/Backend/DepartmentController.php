<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\DepartmentRequest;
use App\Models\Admin\Department;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departments = Department::get();

        return view('backend.pages.department.index',compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.department.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DepartmentRequest $request)
    {
        // dd($request->all());
        $department = new Department();

        if ($request->hasFile('image')) {
            $destinationPath= 'public/department-image/';
            $picture      = $request->file('image');
            $fileName   = time() . '.' . $picture->getClientOriginalExtension();
            $picture->storeAs($destinationPath,$fileName);
            $department->image = $fileName;

        }
        $department->dName = $request->dName;
        $department->dArea = $request->dArea;

        $department->save();

        return redirect(route('department.index'))->with('message', 'Department info create successfully.');

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
