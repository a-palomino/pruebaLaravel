   
<nav class="navbar navbar-dark bg-dark static-top">
    <div class="container p-xxl">
        <div class="row col-12">

            <!-- cambiar para poner ruta relativa -->
            <div class="col-sm-6 col-md-3 col-6 text-light p-auto"><a href="<?php echo url('')?>"><img src="<?php echo url('img/prueba.png')?>" width="100" height="100"></a></div>

            <!-- Si el usuario está logueado aparecerá su nombre, sino, visitante -->
            <div class="col-sm-6 col-md-4 col-6 text-light pt-auto">  

                <div><a href="<?php echo url('')?>">Inicio</a></div>
                <div><a href="<?php echo url('jugar')?>">Jugar</a></div>
                <div><a href="<?php echo url('estadisticas')?>">Estadisticas</a></div>

            </div>

            <!-- Hacemos que si el usuario está identificado, no aparezca el login -->
            <div class="col-sm-6 col-md-4 col-6 text-light">

                <!-- Si el usuario está logueado aparecerá su nombre, sino, visitante -->
                <div class="col col-sm-6 col-md-6 col-6 ">Usuario:
                    @auth
                    {{ auth()->user()->name }}
                    @else 
                    Sin identificar

                @endauth
                </div>


                <!-- Muestra el boton de login sino esta logeado, en canvio si esta logeado muestra logout-->

                <div class="col col-sm-6 col-md-6 col-6 mr-5">
                    @auth
                        <a href="#" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                {{ __('Logout') }}</a>
                    
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>


                        @else 
                       <a href="{{ route('login') }}" class="text-light">Login</a>
        
                    @endauth
                </div>
            </div>
            
        </div>
    </div>
</nav>