<!DOCTYPE html>
<html>
	<head>
		@include('partials._head')
	</head>
	<body>
		@include('partials._navbar')

		@yield('jumbotron')

		<div class="container">
			@yield('content')
		</div>
		@include('partials._javascript')

		@include('partials._footer')
	</body>
</html>