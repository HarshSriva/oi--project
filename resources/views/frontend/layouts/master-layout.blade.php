<!DOCTYPE html>
<html lang="en">
<head>
	@include('frontend.includes.meta-info')
	
	@include('frontend.includes.head')
</head>
<body>

	<div class="container-fluid m-0 p-0 main">

		<!-- header here -->

		@include('frontend.includes.header')

		<!-- header here -->


		<!-- content here -->
		@yield('content')
		<!-- content here -->

		<!-- footer here -->

		@include('frontend.includes.footer')

		<!-- footer here -->

		<!-- footer scripts here -->

		@include('frontend.includes.footer-scripts')

		<!-- footer scripts here -->

	</div>

</body>
</html>