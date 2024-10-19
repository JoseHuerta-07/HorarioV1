<nav class="navbar navbar-expand-lg navbar-dark bg-dark" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('inicio') }}">ITPN</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
            aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Cátalogo
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                        <li><a class="dropdown-item text-primary" href="{{ route('alumnos.index') }}">Alumnos</a></li>
                        <li><a class="dropdown-item text-primary" href="{{ route('puestos.index') }}">Puestos</a></li>
                        <li><a class="dropdown-item text-primary" href="{{ route('plazas.index') }}">Plazas</a></li>
                        <li><a class="dropdown-item" href="{{ route('maestros') }}">Maestros</a></li>
                        <li><a class="dropdown-item text-primary" href="{{ route('deptos.index') }}">Departamentos</a></li>
                        <li><a class="dropdown-item text-primary" href="{{ route('carreras.index') }}">Carreras</a></li>
                        <li><a class="dropdown-item" href="{{ route('reticulas') }}">Retículas</a></li>
                        <li><a class="dropdown-item" href="{{ route('materias') }}">Materias</a></li>
                    </ul>
                </li>
                </ul>
            <div class="d-flex">
                @guest
                    <a href="{{ route('register') }}" class="btn btn-outline-warning me-2">Registrarse</a>
                    <a href="{{ route('login') }}" class="btn btn-outline-success">Iniciar Sesión</a>
                @endguest
                @auth
                    <form action="{{ route('logout') }}" method="POST" class="d-inline">
                        @csrf
                        <button class="btn btn-danger">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0z"/>
                        <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708z"/>
                        </svg>   
                        Salir
                        </button>
                    </form>
                    <div class="text-white ms-3">
                        <p class="mb-1">Usuario: {{ Auth::user()->name }}</p>
                        <p class="mb-1">Correo: {{ Auth::user()->email }}</p>
                    </div>
                @endauth
                <form class="d-flex my-2 my-auto">
                    <input
                        class="form-control me-sm-2 text-center"
                        type="text"
                        placeholder="Buscar"
                    />
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
</svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
</nav>
