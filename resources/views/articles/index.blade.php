@extends('layout.layout')
@section('content')

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('articles.create') }}"> Nuevo Articulo</a>
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
      <th scope="col">Tema</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Ciudad</th>
      <th scope="col">Autor</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
@foreach ($articles as $article)
    <tr>
      <th scope="row">{{ $article->id }}</th>
      <td>{{ $article->topic }}</td>
      <td>{{ $article->description }}</td>
      @foreach ($users as $user)
      <td >{{ $user->city }}</td>
      @endforeach
      @foreach ($topics as $topic)
      <td >{{ $topic->author }}</td>
      @endforeach
      <td>
      <form action="{{ route('articles.destroy',$article->id) }}" method="POST">
        <a class="btn btn-info" href="{{ route('articles.show',$article->id) }}">Ver</a>
        <a class="btn btn-primary" href="{{ route('articles.edit',$article->id) }}">Editar</a>
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
{{ $articles->links() }}
</div> 
@endsection