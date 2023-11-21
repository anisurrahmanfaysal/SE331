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
                                    <form>
                                        <div class="row">
                                            <div class="col-lg-4">

                                                <div class="mb-3">
                                                    <label class="form-label" for="manufacturername">Manufacturer
                                                        Name</label>
                                                    <input id="manufacturername" name="manufacturername" type="text"
                                                        class="form-control" placeholder="Enter your Manufacturer Name">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">

                                                <div class="mb-3">
                                                    <label class="form-label" for="manufacturerbrand">Manufacturer
                                                        Brand</label>
                                                    <input id="manufacturerbrand" name="manufacturerbrand" type="text"
                                                        class="form-control" placeholder="Enter your Manufacturer Brand">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label class="form-label" for="price">Price</label>
                                                    <input id="price" name="price" type="text" class="form-control"
                                                        placeholder="Enter your Price">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4">

                                                <div class="mb-3">
                                                    <label class="form-label" for="manufacturername">Manufacturer
                                                        Name</label>
                                                    <input id="manufacturername" name="manufacturername" type="text"
                                                        class="form-control" placeholder="Enter your Manufacturer Name">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">

                                                <div class="mb-3">
                                                    <label class="form-label" for="manufacturerbrand">Manufacturer
                                                        Brand</label>
                                                    <input id="manufacturerbrand" name="manufacturerbrand" type="text"
                                                        class="form-control" placeholder="Enter your Manufacturer Brand">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label class="form-label" for="price">Price</label>
                                                    <input id="price" name="price" type="text" class="form-control"
                                                        placeholder="Enter your Price">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4">

                                                <div class="mb-3">
                                                    <label class="form-label" for="manufacturername">Manufacturer
                                                        Name</label>
                                                    <input id="manufacturername" name="manufacturername" type="text"
                                                        class="form-control" placeholder="Enter your Manufacturer Name">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">

                                                <div class="mb-3">
                                                    <label class="form-label" for="manufacturerbrand">Manufacturer
                                                        Brand</label>
                                                    <input id="manufacturerbrand" name="manufacturerbrand" type="text"
                                                        class="form-control" placeholder="Enter your Manufacturer Brand">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label class="form-label" for="price">Price</label>
                                                    <input id="price" name="price" type="text" class="form-control"
                                                        placeholder="Enter your Price">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col ms-auto">
                                                <div class="d-flex flex-reverse flex-wrap gap-2">
                                                    <a href="#" class="btn btn-success"> <i
                                                            class="uil uil-file-alt"></i> Save Employee</a>
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
