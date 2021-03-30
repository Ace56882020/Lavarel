@extends('layout.layout')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Nuevo Usuario</h2>
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

<form action="{{ route('users.store') }}" method="POST">
@csrf
  <div class="form-group">
    <input type="text" class="form-control"  placeholder="Usuario" name ="user">
  </div>
  <div class="form-group">

    <input type="text" class="form-control"  placeholder="Ciudad" name ="city">
  </div>
    <div class="pull-right">
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a class="btn btn-info" href="{{ route('users.index') }}"> Volver</a>
    </div>
</form>

@endsection