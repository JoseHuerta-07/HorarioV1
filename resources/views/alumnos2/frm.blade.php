@extends('inicio2')

@section('contenido1')
    @include('alumnos2/tablahtml')
@endsection

@section('contenido2')
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="form-floating mb-3 mt-3">
                <div class="text-center text-uppercase">
                    <h4 class="mb-3">
                        @if ($accion == 'crear')
                            Insertando datos nuevos
                        @elseif ($accion == 'actualizar')
                            Actualizando datos
                        @endif
                    </h4>
                </div>

                <div class="form-floating">
                    <form method="POST" 
                    action="@if ($accion == 'crear') 
                                {{ route('alumnos.store') }} 
                            @else 
                                {{ route('alumnos.update', $alumno->id) }} 
                            @endif">
              
                        @csrf
                        @if ($accion == 'eliminar')
                            @method('DELETE')
                        @endif

                        <div class="form-floating mb-3">
                        <input type="text" id="floatingInput" name="noctrl" class="form-control" maxlength="8" id="noctrl"
                        placeholder="No. Control" value="{{ old('noctrl', $alumno->noctrl ?? '') }}" {{$desabilitado}}>
                            <label class="text-secondary" for="floatingInput">No. de Control</label>
                            @error('noctrl')
                                <ul class="list-unstyled text-danger">
                                    <p>error en el No. de Control {{ $message }}</p>
                                </ul>
                            @enderror
                            <div class="form-text">Escribe tu No. de Control</div>
                        </div>

                        <div class="form-floating mb-3">
                        <input type="text" id="floatingInput" name="nombre" class="form-control" id="nombre"
                        placeholder="Nombre" value="{{ old('nombre', $alumno->nombre) }}" aria-describedby="nombreHelp" {{$desabilitado}}>
                            <label class="text-secondary" for="floatingInput">Nombre</label>       
                            @error('nombre')
                                <ul class="list-unstyled text-danger">
                                    <p>error en el nombre {{ $message }}</p>
                                </ul>
                            @enderror
                            <div class="form-text">Escribe tu Nombre</div>
                        </div>

                        <div class="form-floating mb-3">
                        <input type="text" id="floatingInput" name="apellidop" class="form-control" id="apellidop"
                        placeholder="Apellido Paterno" value="{{ old('apellidop', $alumno->apellidop) }}" aria-describedby="apellidoHelp" {{$desabilitado}}>
                            <label id="floatingInput" class="text-secondary">Apellido Paterno</label>
                            @error('apellidop')
                                <ul class="list-unstyled text-danger">
                                    <p>error en el apellido {{ $message }}</p>
                                </ul>
                            @enderror
                            <div class="form-text">Escribe tu apellido paterno</div>
                        </div>

                        <div class="form-floating mb-3">
                        <input type="text" id="floatingInput" name="apellidom" class="form-control" id="apellidom"
                        placeholder="Apellido materno" value="{{ old('apellidom', $alumno->apellidom ?? '') }}" {{$desabilitado}}>
                            <label for="floatingInput" class="text-secondary">Apellido Materno</label>
                            @error('apellidom')
                                <ul class="list-unstyled text-danger">
                                    <p>error en el apellido materno {{ $message }}</p>
                                </ul>
                            @enderror
                            <div class="form-text">Escribe tu apellido materno</div>
                        </div>

                        <div class="form-floating mb-3">
                            <select id="floatingSelect" name="sexo" class="form-select" id="sexo" {{$desabilitado}}>
                            <option selected>--Selecciona tu sexo--</option>
                                <option value="M" {{ old('sexo', $alumno->sexo ?? '') == 'M' ? 'selected' : '' }}>Masculino</option>
                                <option value="F" {{ old('sexo', $alumno->sexo ?? '') == 'F' ? 'selected' : '' }}>Femenino</option>
                            </select>
                            <label for="floatingSelect" class="text-secondary">Sexo</label>
                            @error('sexo')
                                <ul class="list-unstyled text-danger">
                                    <p>error en el sexo {{ $message }}</p>
                                </ul>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <input type="email" id="floatingInput" name="email" class="form-control" id="email"
                            placeholder="Email" value="{{ old('email', $alumno->email) }}" aria-describedby="emailHelp" {{$desabilitado}}>
                            <label for="floatingInpu" class="text-secondary">Email</label>
                            @error('email')
                                <ul class="list-unstyled text-danger">
                                    <p>error en el email {{ $message }}</p>
                                </ul>
                            @enderror
                            <div id="emailHelp" class="form-text">Escribe tu correo electrónico</div>
                        </div>

                        <div class="form-floating mb-3">
                            <select id="floatingSelect" name="carrera_id" class="form-select" id="carrera_id" {{$desabilitado}}>
                            <option selected>--Selecciona tu carrera--</option>
                                @foreach ($carreras as $carrera)
                                    <option value="{{ $carrera->id }}" {{ old('carrera_id', $alumno->carrera_id ?? '') == $carrera->id ? 'selected' : '' }}>
                                        {{ $carrera->nombreCarrera }}
                                    </option>
                                @endforeach
                            </select>
                            <label for="floatingSelect" class="form-label">Carrera</label>
                            @error('carrera_id')
                                <ul class="list-unstyled text-danger">
                                    <p>error en la carrera {{ $message }}</p>
                                </ul>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">{{ $txtbtn }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
