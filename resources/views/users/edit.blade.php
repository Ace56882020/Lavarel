@extends('layout.layout')
   
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Editar Usuario</h2>
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

<form action="{{ route('users.update',$user->id) }}" method="POST">
@csrf
@method('PUT')
  <div class="form-group">
    <label for="user">Usuario</label>
    <input type="text" class="form-control" value="{{ $user->user }}" placeholder="Usuario" name ="user">
  </div>
  <div class="form-group">
    <label for="city">Ciudad</label>
    <input type="text" class="form-control" value="{{ $user->city }}" placeholder="Ciudad" name ="city">
  </div>
    <div class="pull-right">
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a class="btn btn-info" href="{{ route('users.index') }}"> Back</a>
    </div>
</form>

@endsection