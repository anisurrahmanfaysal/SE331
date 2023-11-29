<!doctype html>
<html class="no-js" lang="en">

    <head>
		<!-- meta data -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

        @include('frontend.layout.partials.style')

        <!-- title of site -->
        <title>HR Management</title>

    </head>

	<body>
		<!-- top-area Start -->
        <section id="top-area" class="top-area">
            <div class="header-area">
                <!-- Start Navigation -->
                <nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy"  data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">

                    <div class="container">

                        <!-- Start Header Navigation -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                                <i class="fa fa-bars"></i>
                            </button>
                            <a class="navbar-brand" href="index.html">Human<span>Resource</span></a>

                        </div><!--/.navbar-header-->
                        <!-- End Header Navigation -->

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
                            <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                                <li class=" scroll active"><a href="#home">home</a></li>
                                <li class="scroll"><a href="#works">how it works</a></li>
                                <li class="scroll"><a href="#reviews">review</a></li>
                                <li class="scroll"><a href="#contact">contact</a></li>
                                <li class=""><a href="{{ route('login') }}">sign in</a></li>

                                <li class=""><a href="{{ route('register') }}">sign up</a></li>

                            </ul><!--/.nav -->
                        </div><!-- /.navbar-collapse -->
                    </div><!--/.container-->
                </nav><!--/nav-->
                <!-- End Navigation -->
            </div><!--/.header-area-->
            <div class="clearfix"></div>

        </section>

		<!-- /.top-area-->
		<!-- top-area End -->

		<!--welcome-hero start -->
		@include('frontend.layout.partials.home')
		<!--welcome-hero end -->

		<!--list-topics start -->
		@include('frontend.layout.partials.list-topics')
		<!--list-topics end-->

		<!--works start -->
		@include('frontend.layout.partials.works')
		<!--works end -->

		<!--reviews start -->
		@include('frontend.layout.partials.reviews')
		<!--reviews end -->

		<!-- statistics strat -->
		@include('frontend.layout.partials.statistics')
		<!-- statistics end -->

		<!--subscription strat -->
		@include('frontend.layout.partials.subscription')
		<!--subscription end -->


		<!--blog start -->
		@include('frontend.layout.partials.blog')
		<!--blog end -->

        @include('frontend.layout.partials.footer')
        @include('frontend.layout.partials.script')
    </body>

</html>
