@extends('backend.layout.app')



@section('main-body')
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
 

        <div class="page-content">

            <div class="container-fluid">

                

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between py-3">
                                    <h4 class="card-title">Department Table</h4>
                                    <a class="btn btn-outline-primary" href="{{route('department.create')}}"><i class="uil-user-plus mx-2"></i>Add Department</a>
                                </div>
                                <p class="py-2 text-center text-success">{{Session::get('message')}}</p>
                                <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>S No</th>
                                            <th>Department Name</th>
                                            <th>Department Area</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        {{-- @foreach ($Department as $item)
                                            <tr>
                                            
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$item->fName}}</td>
                                                <td>{{$item->lName}}</td>
                                                <td>{{$item->email}}</td>
                                                <td>{{$item->phone}}</td>
                                                <td>{{$item->address}}</td>
                                                <td>{{$item->joindate}}</td>
                                                <td>{{$item->gender}}</td>
                                                <td>{{$item->department}}</td>
                                                <td><img src="{{$item->image}}" alt=""></td>
                                                <td>
                                                    <a class="btn btn-outline-primary" href="{{route('Department.edit',$item->id)}}">Edit</a>
                                                    <a class="btn btn-outline-danger" href="{{route('Department.edit',$item->id)}}">Delete</a>

                                                </td>                                          
                                            </tr>
                                        @endforeach --}}
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

    <!-- end main content-->
@endsection
