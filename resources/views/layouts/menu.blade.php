<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header" style="background: #4f5467;">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <center>

                        <h4 class="modal-title" style="color:aliceblue;">Ayuda - App EggIot</h4>
                    </center>
                </div>
                <div class="modal-body">
                    <center>

                        <iframe width="650" height="500" src="https://www.youtube.com/embed/L0kD1eAlR58"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                    </center>

                </div>
            </div>
        </div>
    </div>
<div class="navbar-default sidebar" role="navigation">

    

    <div class="sidebar-nav navbar-collapse slimscrollsidebar">


        
        <div class="user-profile">
            <div class="dropdown user-pro-body">
                <div><img src="/img/users/{{Auth::user()->profile_photo_path}}" alt="user-img" class="img-circle"></div>
                <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true"
                    aria-expanded="false">{{(Auth::user()->name)}} <span class="caret"></span></a>
                <ul class="dropdown-menu animated flipInY">
                    <li><a href="{{ url('MiPerfil')}}"><i class="ti-user"></i> Mi Perfil</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><i
                                class="ti-wallet"></i> Ayuda</a></li>
                    {{--  <li><a href="#"><i class="ti-email"></i> Inbox</a></li> --}}
                    <li role="separator" class="divider"></li>
                    {{-- <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li> --}}
                    <li role="separator" class="divider"></li>
                    {{-- <li><a href="login.html"><i class="fa fa-power-off"></i> Logout</a></li> --}}
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <li> <a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <i class="fa fa-power-off"></i>
                            Cerrar Sesión
                        </a></li>
                </ul>
            </div>
        </div>
        <ul class="nav" id="side-menu">
            <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                <!-- input-group -->
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search..."> <span class="input-group-btn">
                        <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
                    </span>
                </div>
                <!-- /input-group -->
            </li>

            <li><a href="{{ url('inicio')}}" class="waves-effect"><i class="linea-icon linea-basic fa-fw"
                        data-icon="v"></i> <span class="hide-menu">Inicio</span></a></li>
            <li>
                <a href="inbox.html" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i>
                    <span class="hide-menu">Reporte Huevos<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="{{ url('huevos')}}">Huevos</a></li>
                    <li><a href="{{ url('graficaHuevos')}}">Grafica</a></li>
                </ul>
            </li>

            <li>
                <a href="inbox.html" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i>
                    <span class="hide-menu">Tipo JUMBO<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="{{ url('GeneralJumbo')}}">Reporte General</a></li>
                    <li><a href="{{ url('DetalleJumbo')}}">Reporte Detallada</a></li>
                    <li><a href="{{ url('graficaJumbo')}}">Grafica</a></li>
                </ul>
            </li>

            <li>
                <a href="inbox.html" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i>
                    <span class="hide-menu">Tipo AAA<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="{{ url('GeneralAAA')}}">Reporte General</a></li>
                    <li><a href="{{ url('DetalleAAA')}}">Reporte Detallada</a></li>
                    <li><a href="{{ url('graficaAAA')}}">Grafica</a></li>
                </ul>
            </li>

            <li>
                <a href="inbox.html" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i>
                    <span class="hide-menu">Tipo AA<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="{{ url('GeneralA_A')}}">Reporte General</a></li>
                    <li><a href="{{ url('DetalleA_A')}}">Reporte Detallada</a></li>
                    <li><a href="{{ url('graficaA_A')}}">Grafica</a></li>
                </ul>
            </li>

            <li>
                <a href="inbox.html" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i>
                    <span class="hide-menu">Tipo A<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="{{ url('General_A')}}">Reporte General</a></li>
                    <li><a href="{{ url('Detalle_A')}}">Reporte Detallada</a></li>
                    <li><a href="{{ url('grafica_A')}}">Grafica</a></li>
                </ul>
            </li>

            <li>
                <a href="inbox.html" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i>
                    <span class="hide-menu">Tipo B<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="{{ url('GeneralB')}}">Reporte General</a></li>
                    <li><a href="{{ url('DetalleB')}}">Reporte Detallada</a></li>
                    <li><a href="{{ url('graficaB')}}">Grafica</a></li>
                </ul>
            </li>

            <li>
                <a href="inbox.html" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i>
                    <span class="hide-menu">Tipo C<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="{{ url('GeneralC')}}">Reporte General</a></li>
                    <li><a href="{{ url('DetalleC')}}">Reporte Detallada</a></li>
                    <li><a href="{{ url('graficaC')}}">Grafica</a></li>
                </ul>
            </li>


            <li><a href="{{ url('usuarios')}}" class="waves-effect"><i class="linea-icon linea-basic icon-user"></i>
                    <span class="hide-menu">Usuarios</span></a></li>
            <li><a href="{{ url('distribuidora')}}" class="waves-effect"><i
                        class="linea-icon linea-basic  icon-location-pin"></i> <span
                        class="hide-menu">Distribuidora</span></a></li>
            <li><a href="{{ url('iot')}}" class="waves-effect"><i class="linea-icon linea-basic fa-fw"
                        data-icon="&#xe000;"></i> <span class="hide-menu">Sensores</span></a></li>
            <li><a href="{{ url('clasificacion')}}" class="waves-effect"><i data-icon=")" style="padding: 0 4px;
                font-size: 18px;" class=" fa fa-spin fa-cog"></i> <span class="hide-menu">INF tabla
                        clasificación</span></a></li>

        </ul>
    </div>
</div>
