@extends('backend.layout.app')

@section('main-body')
    <div class="page-content">

        <div class="container-fluid"> <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div>
                        <div class="card">
                            <div class="card-header">Employee Form</div>

                            <div>
                                <div class="p-4 border-top">
                                    <form action="{{route('employee.store')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-4">

                                                <div class="mb-3">
                                                    <label class="form-label" for="manufacturername">First
                                                        Name</label>
                                                    <input id="manufacturername" name="fName" type="text"
                                                        class="form-control" placeholder="Enter First Name">
                                                        @error('fName')
                                                    <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>                                               
                                            </div>
                                            <div class="col-lg-4">

                                                <div class="mb-3">
                                                    <label class="form-label" for="manufacturerbrand">Last
                                                        Name</label>
                                                    <input id="manufacturerbrand" name="lName" type="text"
                                                        class="form-control" placeholder="Enter Last Name">
                                                        @error('lName')
                                                            <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label class="form-label" for="price">Email</label>
                                                    <input id="price" name="email" type="text" class="form-control"
                                                        placeholder="Enter your Email">
                                                        @error('email')
                                                            <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4">

                                                <div class="mb-3">
                                                    <label class="form-label" for="manufacturername">Phone
                                                        Number</label>
                                                    <input id="manufacturername" name="phone" type="text"
                                                        class="form-control" placeholder="Enter Phone Number">
                                                        @error('phone')
                                                            <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-4">

                                                <div class="mb-3">
                                                    <label class="form-label" for="manufacturerbrand">Address</label>
                                                    <input id="manufacturerbrand" name="address" type="text"
                                                        class="form-control" placeholder="Enter Your Address">
                                                        @error('address')
                                                            <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label class="form-label" for="price">Join date</label>
                                                    <input id="price" name="joindate" type="date" class="form-control"
                                                        placeholder="Enter Join Date">
                                                        @error('joindate')
                                                            <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4">

                                                <div class="mb-3">
                                                    {{-- <label class="form-label" for="manufacturername">Gender</label> --}}
                                                    <div>
                                                        <h5 class="font-size-14 mb-3">
                                                            <i class="mdi mdi-arrow-right text-primary me-1"></i>Gender
                                                        </h5>
                                                        <div class="vstack gap-2">
                                                            <div class="form-check">
                                                                <input class="form-check-input" value="male" type="radio" name="gender" id="formRadios1" checked="">
                                                                <label class="form-check-label" for="formRadios1">
                                                                    Male
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" value="female" type="radio" name="gender" id="formRadios2">
                                                                <label class="form-check-label" for="formRadios2">
                                                                    Female
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                        @error('gender')
                                                            <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label class="form-label" for="price">Department</label>
                                                    <select class="form-select" name="department" aria-label="Floating label select example">
                                                        <option value="null">Select Department</option>
                                                        <option value="Web Development">Web Development</option>
                                                        <option value="Android Development">Android Development</option>
                                                        <option value="Game Development">Game Development</option>
                                                    </select>
                                                        @error('department')
                                                            <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-4">

                                                <div class="mb-3">
                                                    <label class="form-label" for="manufacturerbrand">Image</label>
                                                    <input id="manufacturerbrand" name="image" type="file"
                                                        class="form-control">
                                                        @error('image')
                                                            <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="row my-4">
                                            <div class="col ms-auto">
                                                <div class="d-flex flex-reverse flex-wrap gap-2">
                                                    <button type="submit" class="btn btn-outline-success"> <i
                                                            class="uil uil-file-alt"></i> Save Employee</button>
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row-->

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
@endsection