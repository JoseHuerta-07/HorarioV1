<style>
    .custom-title {
        color: #343a40;
        font-weight: bold;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
    }
</style>
<div class="container">
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="container text-center mt-5">
        <h1 class="custom-title">Catálago de Alumnos <i class="bi bi-person-bounding-box"></i></h1>
    </div>
    <div class="table-responsive text-center">
        <a href="{{ route('alumnos.create') }}">
           <button class="btn btn-success mb-2">
           <i class="bi bi-plus-lg"></i>
           </button>
        </a>
           
        <table class="table table-dark text-center" data-bs-theme="dark">
            <thead>
                <tr class="table table-secondary">
                    <th scope="col">ID</th>
                    <th scope="col">No. de Control</th> <!-- Nuevo campo -->
                    <th scope="col">Nombre Alumno</th>
                    <th scope="col">Apellido Paterno</th>
                    <th scope="col">Apellido Materno</th> <!-- Nuevo campo -->
                    <th scope="col">Sexo</th> <!-- Nuevo campo -->
                    <th scope="col">Email</th>
                    <th scope="col">Carrera</th> <!-- Nuevo campo -->
                    <th scope="col">Creado</th>
                    <th scope="col">Actualizado</th>
                    <th scope="col" colspan="3">Acciones</th> 
                </tr>
            </thead>
            <tbody>
                @foreach ($alumnos as $alumno)
                    <tr>
                        <td scope="row">{{ $alumno->id }}</td>
                        <td>{{ $alumno->noctrl }}</td> <!-- Nuevo campo -->
                        <td>{{ $alumno->nombre }}</td>
                        <td>{{ $alumno->apellidop }}</td>
                        <td>{{ $alumno->apellidom }}</td> <!-- Nuevo campo -->
                        <td>{{ $alumno->sexo }}</td> <!-- Nuevo campo -->
                        <td>{{ $alumno->email }}</td>
                        <td>{{ $alumno->carrera->nombreCarrera ?? 'Sin Carrera' }}</td>
                        <td>{{ $alumno->created_at }}</td>
                        <td>{{ $alumno->updated_at }}</td>
                        <td><a href="{{ route('alumnos.show', $alumno->id) }}"><button class="btn btn-primary" ><i class="bi bi-eye-fill"></button></i></a></td>
                        <td><a href="{{ route('alumnos.eliminar', $alumno->id) }}"><button class="btn btn-danger"><i class="bi bi-trash"></i></button></a></td>
                        <td><a href="{{ route('alumnos.edit', $alumno->id) }}"><button class="btn btn-warning"><i class="bi bi-pencil-square"></i></button></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{-- Botones de paginación --}}
        {{ $alumnos->links() }}
    </div>
</div>
