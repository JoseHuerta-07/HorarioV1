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
    <h1 class="custom-title">Catálago de Puestos <i class="bi bi-person-vcard"></i></h1>
</div>

<div class="table-responsive text-center">
    <a href="{{ route('puestos.create') }}"> 
    <button class="btn btn-success mb-2">
                <i class="bi bi-plus-lg"></i>
    </button> 
    </a>
  
        <table class="table table-bordered table-dark text-center" data-bs-theme="dark">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre Puesto</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Creado</th>
                    <th scope="col">Actualizado</th>
                    <th scope="col" colspan="3">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($puestos as $puesto)
                    <tr>
                        <td scope="row">{{ $puesto->id }}</td>
                        <td>{{ $puesto->nombrepuesto }}</td>
                        <td>{{ $puesto->tipo }}</td>
                        <td>{{ $puesto->created_at }}</td>
                        <td>{{ $puesto->updated_at }}</td>
                        {{-- Boton para ver detalles todos son get por ser ancord --}}
                        <td><a href="{{ route('puestos.show', $puesto->id) }}"><button class="btn btn-primary"><i class="bi bi-eye-fill"></button></i></a></td>
                        <td><a href="{{ route('puestos.eliminar', $puesto->id) }}"><button class="btn btn-danger"><i class="bi bi-trash"></i></button></a></td>
                        <td><a href="{{ route('puestos.edit', $puesto->id) }}"><button class="btn btn-warning"><i class="bi bi-pencil-square"></i></button></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $puestos->links() }}
    </div>
