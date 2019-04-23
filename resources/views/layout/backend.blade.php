<!DOCTYPE html>
<html>
<head>
	@include('backend.includes.head')

	@yield('extra-css')

</head>	
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">
		<!-- header -->
		@include('backend.includes.header')

		@yield('content')

		<!-- footer --> 
		@include('backend.includes.footer')

</div>

	@include('backend.includes.foot')
	
	@yield('extra-js')

</body>
</html>
