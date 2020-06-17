<section id="nav-bar" class="bg-white">
  <nav class="navbar navbar-expand-lg navbar-light shadow border-0" style="height: 15vh">
    <a class="navbar-brand ml-5" href="{{route('home')}}"><img src="http://www.ujat.mx/Content/images/logo-ujat.png" alt="logo-ujat" height="75px"></a>
    <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <img src="{{asset('img/icons/hamburger.svg')}}" height="20px" alt="">
    </button>
    <div class="collapse navbar-collapse bg-white" id="navbarNav">
      <ul class="navbar-nav ml-auto text-center p-0">
        @if (Auth::check())
          <li class="nav-item pr-5">
            <a class="nav-link text-dark font-weight-bold" href="{{route('home')}}">Inicio</a>
          </li>
          <li class="nav-item array dropdown">
            <a class="nav-link dropdown-toggle text-dark font-weight-bold mr-5 pl-1" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              {{Auth::user()->name}}
            </a>
            <ul class="dropdown-menu" role="menu">
            <li class="nav-item text-center dropdown">
              <a class="dropdown-item nav-l" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                <span class="nav-l">{{ __('Cerrar sesión') }}</span>
              </a>
      
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </li>	    	
            </ul>
        </li>
        @else
          <li class="nav-item mr-3 p-2">
            <a class="nav-link text-dark font-weight-bold" href="{{route('home')}}">Inicio</a>
          </li>
          <li class="nav-item mr-3 p-2">
              <a class="nav-link text-dark font-weight-bold" href="{{route('login')}}">Iniciar sesión</a>
          </li>
        @endif
      </ul>
    </div>
  </nav>
</section>
