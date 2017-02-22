@extends('layouts.app')

@section('content')

<div class="container">

	<div class="carousel carousel-slider">
		<a class="carousel-item" href="#one!"><img src="https://drscdn.500px.org/photo/163469437/q%3D80_m%3D2000/ae526b6695a338c99f14970066e703c2"></a>
		<a class="carousel-item" href="#two!"><img src="https://drscdn.500px.org/photo/163469437/q%3D80_m%3D2000/ae526b6695a338c99f14970066e703c2"></a>
		<a class="carousel-item" href="#three!"><img src="https://drscdn.500px.org/photo/163469437/q%3D80_m%3D2000/ae526b6695a338c99f14970066e703c2"></a>
	</div>


		<script type="text/javascript">
			$(document).ready(function(){
				$('.carousel.carousel-slider').carousel({fullWidth: true, indicators:true});
			});

		</script>

		@endsection