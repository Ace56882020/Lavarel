@extends('layout.layout')
   
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Editar Articulo</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-info" href="{{ route('articles.index') }}"> Back</a>
        </div>
    </div>
</div>

<div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tema:</strong>
                {{ $article->topic }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Descripción:</strong>
                {{ $article->description }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Categoria:</strong>
                {{ $article->categorie }}
            </div>
        </div>
    </div>

@endsection