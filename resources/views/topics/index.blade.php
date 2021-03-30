@extends('layout.layout')
@section('content')


<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('topics.create') }}"> Nuevo Tema</a>
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
      <th scope="col">Nombre tema</th>
      <th scope="col">Autor</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
@foreach ($topics as $topic)
    <tr>
      <th scope="row">{{ $topic->id }}</th>
      <td>{{ $topic->name }}</td>
      <td>{{ $topic->author }}</td>
      <td>
      <form action="{{ route('topics.destroy',$topic->id) }}" method="POST">
          <a class="btn btn-info" href="{{ route('topics.show',$topic->id) }}">Ver</a>
          <a class="btn btn-primary" href="{{ route('topics.edit',$topic->id) }}">Editar</a>
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
{{ $topics->links() }}
</div>

@endsection