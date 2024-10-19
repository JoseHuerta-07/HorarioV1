<style>
  .custom-title {
    color: #343a40;
    font-weight: bold;
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
  }
</style>
<div class="container text-center mt-5 text-center">
  @if (session('success'))
  <div class="alert alert-success">
    {{ session('success') }}
  </div>
  @endif
  <h1 class="custom-title">Catálago de Plazas <i class="bi bi-pin-map-fill"></i></h1>
</div>

<div class="table-responsive-md text-center">
  <a href="{{ route('plazas.create')}}">
    <button class="btn btn-success mb-2">
      <i class="bi bi-plus-lg"></i>
    </button>
  </a>


  <table class="table table-bordered table-dark text-center" data-bs-theme="dark">
    <thead>
      <tr>
        <th scope="col"># Plaza</th>
        <th scope="col">ID Plaza</th>
        <th scope="col">Nombre Plaza</th>
        <th scope="col">Creado</th>
        <th scope="col">Actualizado</th>
        <th scope="col" colspan="3">Acciones</th>

      </tr>
    </thead>
    <tbody>
      @foreach ($plazas as $plaza)
      <tr class="">
        <td scope="row">{{ $plaza->id }}</td>
        <td scope="row">{{ $plaza->idplaza }}</td>
        <td>{{ $plaza->nombreplaza }}</td>
        <td>{{ $plaza->created_at }}</td>
        <td>{{ $plaza->updated_at }}</td>
        <td><a href=" {{ route('plazas.show', $plaza->id)}}"><button class="btn btn-primary"><i class="bi bi-eye-fill"></button></i></a></td>
        <td><a href="{{ route('plazas.eliminar', $plaza->id)}}"><button class="btn btn-danger"><i class="bi bi-trash"></i></button></a></td>
        <td><a href="{{ route('plazas.edit', $plaza->id)}}"><button class="btn btn-warning"><i class="bi bi-pencil-square"></i></button></a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
  {{ $plazas->links() }}
</div>