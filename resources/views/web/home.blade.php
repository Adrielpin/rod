@extends('layouts.app')

@section('content')

<div class="slider fullscreen">

  <ul class="slides">

    <li>
      <img src="https://drscdn.500px.org/photo/135972879/q%3D80_m%3D2000/ed28265a6a776f85ffe907703a3938e0">
      <div class="caption center-align">
        <h2>Inspiração e arte!</h2>
        <h4 class="light grey-text text-lighten-3">Fotografia em família.</h4>
      </div>
    </li>

    <li>
      <img src="https://drscdn.500px.org/photo/141475619/q%3D80_m%3D1500/5c850baff4a8b91f65fb0a4d9192a6ea">
      <div class="caption left-align">
        <h2>Aniversario infantil</h2>
        <h4 class="light grey-text text-lighten-3">Captura de emoção.</h4>
      </div>
    </li>

    <li>
      <img src="https://drscdn.500px.org/photo/163469437/q%3D80_m%3D2000/ae526b6695a338c99f14970066e703c2">
      <div class="caption right-align">
        <h2>Criatividade</h2>
        <h4 class="light grey-text text-lighten-3">Fotos exclusivas.</h4>
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
