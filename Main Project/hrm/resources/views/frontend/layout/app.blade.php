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

        @include('frontend.layout.partials.top-area')
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
