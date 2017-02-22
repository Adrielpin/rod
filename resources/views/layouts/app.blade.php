@extends('layouts.plain')
@section('menu')

  <div class="navbar-fixed">

<nav>
    <div class="nav-wrapper container">
      <a href="#!" class="brand-logo">ROD Fotografia</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="sass.html">Quem somos</a></li>
        <li><a href="badges.html">Galeria</a></li>
        <li><a href="collapsible.html">Contato</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="sass.html">Quem somos</a></li>
        <li><a href="badges.html">Galeria</a></li>
        <li><a href="collapsible.html">Contato</a></li>
      </ul>
    </div>
  </nav>
</div>

@yield('content')

</div>

<div id="footer">
    <div class="container">
        <p class="text-muted">&copy; <a href="http://www.rodfotografia.com .com"> rodfotografia.com</a> 2017</p>
    </div>
</div>

@endsection
