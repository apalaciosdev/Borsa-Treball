<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{session('rol')=='usuario' ? url('/user') : url('/empresas')}}" style="color:#777"><span style="font-size:15pt">&#9820;</span> Borsa de Treball</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        @if( true || Auth::check() )
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                
                @if (session('rol') == 'empresa')
                    <ul class="navbar-nav navbar-right">
                        <li class="nav-item">
                            <form action="{{ route('crearOferta') }}" method="GET" style="display:inline">
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-link nav-link" style="display:inline;cursor:pointer">
                                    Nueva Oferta
                                </button>
                            </form>
                        </li>
                    </ul>
                @endif

                <ul class="navbar-nav navbar-right">
                    <li class="nav-item">
                        <form action="{{ url('/logout') }}" method="GET" style="display:inline">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-link nav-link" style="display:inline;cursor:pointer">
                                Cerrar Sesión
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        @endif
    </div>
</nav>
