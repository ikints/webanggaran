<!DOCTYPE html>
<html>
<head>
	@include('frontend.includes.head')

	@yield('extra-css')

</head>	
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">
		<!-- header -->
		@include('frontend.includes.header')

		@yield('content')

		<!-- footer --> 
		@include('frontend.includes.footer')

</div>

	@include('frontend.includes.foot')
	
	@yield('extra-js')

</body>
</html>
