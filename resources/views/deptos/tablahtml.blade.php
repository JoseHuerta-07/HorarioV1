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
        <h1 class="custom-title">Catálago de Departamentos <i class="bi bi-building"></i></h1>
    </div>
    <div class="container mt-12 text-center">
        <a href="{{ route('deptos.create') }}">
        <button class="btn btn-success mb-2">
        <i class="bi bi-building-fill-add"></i>
            </button>
        </a>
           
        <table class="table table-bordered table-dark tex-center" data-bs-theme="dark">
            <thead>
                <tr class="table table-primary">
                    <th scope="col">ID</th>
                    <th scope="col">ID Depto</th> <!-- Nuevo campo -->
                    <th scope="col">Nombre del Depto</th>
                    <th scope="col">Nombre Mediano</th> <!-- Nuevo campo -->
                    <th scope="col">Nombre Corto</th> <!-- Nuevo campo -->
                    <th scope="col" colspan="3">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($departamentos as $departamento)
                    <tr>
                        <td scope="row">{{ $departamento->id }}</td>
                        <td>{{ $departamento->idDepto }}</td> <!-- Nuevo campo -->
                        <td>{{ $departamento->nombreDepto }}</td>
                        <td>{{ $departamento->nombreMediano }}</td> <!-- Nuevo campo -->
                        <td>{{ $departamento->nombreCorto }}</td> <!-- Nuevo campo -->
                        <td><a href="{{ route('deptos.show', $departamento->id) }}"><button class="btn btn-primary"><i class="bi bi-eye-fill"></button></i></a></td>
                        <td><a href="{{ route('deptos.eliminar', $departamento->id) }}"><button class="btn btn-danger"><i class="bi bi-trash"></i></button></a></td>
                        <td><a href="{{ route('deptos.edit', $departamento->id) }}"><button class="btn btn-warning"><i class="bi bi-pencil-square"></i></button></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{-- Botones de paginación --}}
        {{ $departamentos->links() }}
    </div>
</div>
