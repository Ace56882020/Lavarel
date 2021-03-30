@extends('layout.layout')
   
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Editar Tema</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-info" href="{{ route('topics.index') }}"> Back</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nombre Tema:</strong>
            {{ $topic->name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Autor:</strong>
                {{ $topic->author }}
            </div>
        </div>
</div>

@endsection