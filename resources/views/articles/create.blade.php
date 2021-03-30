@extends('layout.layout')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Nuevo Articulo</h2>
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

<form action="{{ route('articles.store') }}" method="POST">
@csrf
  <div class="form-group">
    <input type="text" class="form-control"  placeholder="Tema" name ="topic">
  </div>
  <div class="form-group">
    <input class="form-control" type="text"  placeholder="Descripción"  name="description"/>
  </div>
  <label >Ciudad</label>
  <br>
  <select name="user_id" id="" class="form-group"> 
        @foreach ($user as $users)
          <option class="form-control" value="{{ $users->id }}">{{ $users->city }}</option>
        @endforeach
  </select>
  <br>
  <label >Autor</label>
  <br>
  <select name="topic_id" id="" class="form-group"> 
        @foreach ($topic as $topics)
          <option class="form-control" value="{{ $topics->id }}">{{ $topics->author }}</option>
        @endforeach
  </select>


  <div class="pull-right">
  <button type="submit" class="btn btn-primary">Guardar</button>
  <a class="btn btn-success" href="{{ route('articles.index') }}"> Volver</a>
  </div>
  
</form>

@endsection