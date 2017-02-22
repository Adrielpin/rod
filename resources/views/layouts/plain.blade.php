<!DOCTYPE html>

<html lang="{{ config('app.locale') }}">
<head>

	<title>Bootstrap Example</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>

	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">

	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<style type="text/css">
		nav{
			background-color: rgba(255, 0, 0,0.10);
		}

		.side-nav{
			z-index: 9999
		}

	</style>


</head>

<body>

	<script type="text/javascript">
		$(document).ready(function (){
			$(".button-collapse").sideNav();

			$('.slider').slider();
		});
	</script>

	@yield('menu');

</body>
</html>
