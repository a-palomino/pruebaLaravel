<nav class="navbar navbar-expand-lg navbar-light navColor">
    <a class="navbar-brand" href="">
        <img src="img/logoPequeño.png" width="50" height="50" alt="">
      </a>
    
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link text-light" href="<?php echo url('')?>">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="jugar">Jugar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="estadisticas">Estadisticas</a>
        </li>
      </ul>
    </div>

    <div class="form-inline" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-link nav-item active text-light">
            Usuario:
                    @auth
                    {{ auth()->user()->name }}
                    @else 
                    Sin identificar

                @endauth
          </li>
        </ul>
      </div>

      <div class="form-inline" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            @auth
                    <a class="nav-link text-light" href="#" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                {{ __('Logout') }}</a>
                    
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>


                        @else 
                       <a class="nav-link text-light" href="{{ route('login') }}">Login</a>
        
                    @endauth
          </li>
        </ul>
      </div>

  </nav>