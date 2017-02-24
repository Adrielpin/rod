@extends('layouts.plain')
@section('menu')

<header>
  <nav>
    <div class="nav-wrapper container">

	<a href="{{route('home')}}" class="brand-logo" style="padding: 10px"><img src="{{ Storage::url('img/logo.png') }}"></a>
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
@endsection
