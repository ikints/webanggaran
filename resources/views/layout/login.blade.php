<!DOCTYPE html>
<html>
<head>
	@include('frontend.includes.head')

	@yield('extra-css')

</head>	
<body class="hold-transition skin-blue layout-top-nav">
<div class="login-wrapper">

		@yield('content')


</div>

	@include('frontend.includes.foot')
	
	@yield('extra-js')

</body>
</html>
