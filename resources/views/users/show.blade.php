@extends('layout.layout')
   
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Editar Tema</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-info" href="{{ route('users.index') }}"> Back</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Usuario:</strong>
            {{ $user->user }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Ciudad:</strong>
                {{ $user->city }}
            </div>
        </div>
</div>

@endsection