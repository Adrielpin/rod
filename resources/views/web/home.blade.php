@extends('layouts.app')

@section('content')

<div class="slider fullscreen">

  <ul class="slides">

    <li>
      <img src="https://drscdn.500px.org/photo/132125911/q%3D80_m%3D2000/1dfd6b4ff77d3ef1c97f081569178361">
      <div class="caption center-align">
        <h3 class="red-text">Inspiração e arte!</h3>
        <h5 class="red-text">Fotografia em família.</h5>
      </div>
    </li>

    <li>
      <img src="https://drscdn.500px.org/photo/141475619/q%3D80_m%3D1500/5c850baff4a8b91f65fb0a4d9192a6ea"> random image
      <div class="caption left-align">
        <h3 class="red-text">Aniversario infantil</h3>
        <h5 class="red-text">Captura emoção.</h5>
      </div>
    </li>

    <li>
      <img src="https://drscdn.500px.org/photo/163469437/q%3D80_m%3D2000/ae526b6695a338c99f14970066e703c2">
      <div class="caption right-align">
        <h3 class="red-text">Criatividade</h3>
        <h5 class="red-text">Fotos exclusivas.</h5>
      </div>
    </li>

  </ul>

</div>

<script type="text/javascript">
  $(document).ready(function () {
    $('.slider').slider();
  });
</script>


@endsection
