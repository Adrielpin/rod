@extends('layouts.app')

@section('content')

<div class="slider fullscreen">

  <ul class="slides">

    <li>
      <img src="https://drscdn.500px.org/photo/137899643/q%3D80_m%3D2000/5aa38e529c2b02af70c7a5c578bf7c1b">
      <div class="caption right-align">
        <h2>Inspiração e Arte</h2>
        <h4 class="light grey-text text-lighten-3">Fotografia e Família</h4>
      </div>
    </li>

    <li>
      <img src="https://drscdn.500px.org/photo/141475619/q%3D80_m%3D1500/5c850baff4a8b91f65fb0a4d9192a6ea">
      <div class="caption left-align">
        <h2>Festa Infantil</h2>
        <h4 class="light grey-text text-lighten-3">Captura de emoção.</h4> 
      </div>
    </li>
     
    <li>
       <img src="https://drscdn.500px.org/photo/163469437/q%3D80_m%3D2000/ae526b6695a338c99f14970066e703c2">
       <div class="caption center-align">
        <h2>Natureza</h2>
        <h4 class="light grey-text text-lighten-3">Criatividade</h4>
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
