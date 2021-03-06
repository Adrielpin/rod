<!DOCTYPE html>

<html lang="{{ config('app.locale') }}">
<head>

	<title>ROD Fotografia</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>

	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">

	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<style type="text/css">
		
		body{
			background-color: rgb(26, 26, 26);
			
		}

		nav{
			background-color: rgba(51,51, 51,0.50);
		}

		.slider{
			z-index: -10
		}

	</style>

	<script type="text/javascript">
		$(document).ready(function (){
			$(".button-collapse").sideNav();

		});
	</script>


</head>


<body>

	@yield('menu')

</body>

</html>
