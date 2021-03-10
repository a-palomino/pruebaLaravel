   
<nav class="navbar navbar-dark bg-dark static-top">
    <div class="container">
        <div class="row col-12">

            <!-- cambiar para poner ruta relativa -->
            <div class="col-sm-6 col-md-3 col-6 text-light p-auto"><a href="<?php echo url('')?>"><img src="<?php echo url('img/prueba.png')?>" width="100" height="100"></a></div>

            <!-- Si el usuario está logueado aparecerá su nombre, sino, visitante -->
            <div class="col-sm-6 col-md-6 col-6 text-light pt-auto">Usuario:  

                @auth
                    {{ auth()->user()->name }}
                    @else 
                    Sin identificar

                @endauth

            </div>

            <!-- Hacemos que si el usuario está identificado, no aparezca el login -->

            @auth
            <div class="col-sm-6 col-md-3 col-6 text-light pt-5" ><a href="#" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
        {{ __('Logout') }}</a></div>
            
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                @else 
                <div class="col-sm-6 col-md-3 col-6 text-light pt-4" ><a href="{{ route('login') }}" class="text-light" ">Login</a></div>

            @endauth
        </div>
    </div>
</nav>