@extends('layout.layout')
@section('content')


<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('users.create') }}"> Nuevo Usuario</a>
            </div>
        </div>
</div>

@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
@endif

<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Usuario</th>
      <th scope="col">Ciudad</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
@foreach ($users as $user)
    <tr>
      <th scope="row">{{ $user->id }}</th>
      <td>{{ $user->user }}</td>
      <td>{{ $user->city }}</td>
      <td>
      <form action="{{ route('users.destroy',$user->id) }}" method="POST">
          <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Ver</a>
          <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Editar</a>
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
      </td>
    </tr>
@endforeach
  </tbody>
</table>
<div class="paginacion">

</div>

@endsection