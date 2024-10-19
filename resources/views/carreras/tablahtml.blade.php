<style>
    .custom-title {
        color: #343a40;
        font-weight: bold;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
    }
</style>
<div class="container mt-5">
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="container text-center mt-5">
        <h1 class="custom-title">Catálago de Carreras <i class="bi bi-journal-bookmark-fill"></i></h1>
    </div>
    
    <div class="table-responsive text-center">
        <a href="{{ route('carreras.create') }}">
        <button class="btn btn-success mb-2">
                <i class="bi bi-plus-lg"></i>
            </button>
        </a>

        <table class="table table-bordered table-dark tex-center" data-bs-theme="dark">
            <thead>
                <tr class="table table-success">
                    <th scope="col">ID Carrera</th>
                    <th scope="col">Nombre Carrera</th>
                    <th scope="col">Nombre Mediano</th>
                    <th scope="col">Nombre Corto</th>
                    <th scope="col">ID Departamento</th>
                    <th scope="col">Creado</th>
                    <th scope="col">Actualizado</th>
                    <th scope="col" colspan="3">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($carreras as $carrera)
                    <tr>
                        <td scope="row">{{ $carrera->idCarrera }}</td>
                        <td>{{ $carrera->nombreCarrera }}</td>
                        <td>{{ $carrera->nombreMediano }}</td>
                        <td>{{ $carrera->nombreCorto }}</td>
                        <td>{{ $carrera->depto->idDepto ?? 'Sin Departamento' }}</td>
                        <td>{{ $carrera->created_at }}</td>
                        <td>{{ $carrera->updated_at }}</td>
                        <td><a href="{{ route('carreras.show', $carrera->idCarrera) }}"><button class="btn btn-primary"><i class="bi bi-eye-fill"></button></i></a></td>
                        <td><a href="{{ route('carreras.eliminar', $carrera->idCarrera) }}"><button class="btn btn-danger"><i class="bi bi-trash"></i></button></a></td>
                        <td><a href="{{ route('carreras.edit', $carrera->idCarrera) }}"><button class="btn btn-warning"><i class="bi bi-pencil-square"></i></button></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{-- Botones de paginación --}}
        {{ $carreras->links() }}
    </div>
</div>
