@extends('layout.layout')
   
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Article</h2>
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

<form action="{{ route('articles.update',$article->id) }}" method="POST">
@csrf
@method('PUT')
  <div class="form-group">
    <label for="topic">Topic title</label>
    <input type="text" class="form-control" value="{{ $article->topic }}" placeholder="Enter Topic" name ="topic">
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <input class="form-control" rows="3" name="description">{{ $article->description }}</input>
  </div>
  <select name="user_id" id="" class="form-group"> 
        @foreach ($user as $users)
          <option class="form-control" value="{{ $users->id }}">{{ $users->city }}</option>
        @endforeach
  </select>
  <br>
  <select name="topic_id" id="" class="form-group"> 
        @foreach ($topic as $topics)
          <option class="form-control" value="{{ $topics->id }}">{{ $topics->author }}</option>
        @endforeach
  </select>

  <div class="pull-right">
  <button type="submit" class="btn btn-primary">Guardar</button>
  <a class="btn btn-info" href="{{ route('articles.index') }}"> Volver</a>
  </div>
</form>

@endsection