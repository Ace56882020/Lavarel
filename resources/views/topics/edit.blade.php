@extends('layout.layout')
   
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Editar Tema</h2>
        </div>
       
    </div>
</div>
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Atención!</strong> Validar los campos<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('topics.update',$topic->id) }}" method="POST">
@csrf
@method('PUT')
  <div class="form-group">
    <input type="text" class="form-control" value="{{ $topic->name }}" placeholder="Nombre Tema" name ="name">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" value="{{ $topic->author }}" placeholder="Autor" name ="author">
  </div>
    <div class="pull-right">
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a class="btn btn-info" href="{{ route('topics.index') }}"> Back</a>
    </div>
  
</form>

@endsection