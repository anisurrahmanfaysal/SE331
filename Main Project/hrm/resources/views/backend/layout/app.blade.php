<!doctype html>
<html lang="en">

    <head>
		@include('backend.layout.partials.meta')        
		@include('backend.layout.partials.style')

    </head>

    
    <body>

    <!-- <body data-layout="horizontal" data-topbar="colored"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

		    @include('backend.layout.partials.header')  

		    @include('backend.layout.partials.left_sidebar')        
            
            <div class="main-content">
                @yield('main-body')
                
                <!-- End Page-content -->

                @include('backend.layout.partials.footer')
                
            </div>
            <!-- end main content-->
        </div>
        <!-- END layout-wrapper -->

		@include('backend.layout.partials.right_sidebar')        
        

       

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        @include('backend.layout.partials.script')

    </body>

</html>