@extends('backend.layout.app')

@section('main-body')
    <div class="page-content">

        <div class="container-fluid"> <!-- end page title -->

            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div>
                        <div class="card">
                            <div class="card-header">Department Form</div>

                                <div class="card-body">

                                <div class="col-md-8 mx-auto">
                                    
                                    <form action="{{route('department.store')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row mb-4">
                                            <label for="horizontal-Fullname-input" class="col-sm-3 col-form-label">Department Name</label>
                                            <div class="col-sm-9">
                                              <input type="text" class="form-control" id="horizontal-Fullname-input" name="dName" placeholder="Enter your full name">
                                              @error('dName')
                                                 <span class="text-danger">{{$message}}</span>
                                              @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Department Area</label>
                                            <div class="col-sm-9">
                                                <input id="manufacturerbrand" name="dArea" type="text"
                                                class="form-control" placeholder="Enter Last Name">
                                                @error('dArea')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label for="horizontal-password-input" class="col-sm-3 col-form-label">Image</label>
                                            <div class="col-sm-9">
                                                <input id="price" name="image" type="file" class="form-control">
                                                @error('image')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row justify-content-end">
                                            <div class="col-sm-9">

                                                <div class="d-flex flex-wrap gap-3">
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light w-md">Save Department</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                </div>

                            {{-- <div>
                                <div class="p-4 border-top">
                                    <form action="{{route('department.store')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-8 mx-auto">

                                                    
                                                    <div class="mb-3">
                                                        <label class="form-label" for="manufacturername">Department
                                                            Name</label>
                                                        <input id="manufacturername" name="dName" type="text"
                                                            class="form-control" placeholder="Enter First Name">
                                                            @error('dName')
                                                        <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>                                               
                                                
    
                                                    <div class="mb-3">
                                                        <label class="form-label" for="manufacturerbrand">Department
                                                            Area</label>
                                                        <input id="manufacturerbrand" name="dArea" type="text"
                                                            class="form-control" placeholder="Enter Last Name">
                                                            @error('dArea')
                                                                <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                    </div>
                                                
                                                    <div class="mb-3">
                                                        <label class="form-label" for="price">Image</label>
                                                        <input id="price" name="image" type="file" class="form-control">
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
                                                            class="uil uil-file-alt"></i> Save Department</button>
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row-->

                                    </form>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
@endsection