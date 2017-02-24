@extends('layouts.app')

@section('content')

<div class="slider fullscreen">

  <ul class="slides">

    <li>
      <img src="https://drscdn.500px.org/photo/153054439/q%3D80_m%3D2000/9e791e687bc5925de9877fef1b9f30d9">
      <div class="caption center-align">
        <h2>Criatividade</h2>
        <h4 class="light grey-text text-lighten-3">Inspiração e Arte</h4>
      </div>
    </li>

    <li>
      <img src="https://drscdn.500px.org/photo/141475619/q%3D80_m%3D1500/5c850baff4a8b91f65fb0a4d9192a6ea">
      <div class="caption left-align">
        <h2>Festa Infantil</h2>
        <h4 class="light grey-text text-lighten-3">Captura e Emoção</h4> 
      </div>
    </li>

    <li>
       <img src="https://drscdn.500px.org/photo/163469437/q%3D80_m%3D2000/ae526b6695a338c99f14970066e703c2">
       <div class="caption right-align">
        <h2>Natureza</h2>
        <h4 class="light grey-text text-lighten-3">Fotografia e Sensibilidade</h4>
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
