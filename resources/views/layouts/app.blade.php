@extends('layouts.plain')
@section('menu')

<header>
<nav>
    <div class="nav-wrapper container">
      <a href="{{route('home')}}" class="brand-logo red-text">ROD fotografias</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="{{route('home')}}">Quem somos</a></li>
        <li><a href="{{route('galeria')}}">Galeria</a></li>
        <li><a href="{{route('home')}}">Contato</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="{{route('home')}}">Quem somos</a></li>
        <li><a href="{{route('galeria')}}">Galeria</a></li>
        <li><a href="{{route('home')}}">Contato</a></li>
      </ul>
    </div>
  </nav>
</header>
<section>
@yield('content')
</section>
</div>

<footer>
<div id="footer">
  <div class="container">
    <p class="text-muted white-text">&copy; <a href="http://www.rodfotografia.com .com"> rodfotografia.com</a> 2017</p>
  </div>
</div>
</footer>
@endsection
