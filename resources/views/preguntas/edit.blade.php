@extends('layouts.app')
@section('content')
 
<div class="card">
  <div class="card-header">Edicion Pregunta</div>
  <div class="card-body">
      
      <form action="{{ url('gestionPreguntas/' .$preguntas->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$preguntas->id}}" id="id" />
        <label>Pregunta</label><br/>
        <input type="text" name="pregunta" id="pregunta" value="{{$preguntas->pregunta}}" class="form-control"><br/>
        <label>Opcion A</label><br/>
        <input type="text" name="opciona" id="opciona" value="{{$preguntas->opciona}}" class="form-control"><br/>
        <label>Opcion B</label><br/>
        <input type="text" name="opcionb" id="opcionb" value="{{$preguntas->opcionb}}" class="form-control"><br/>
        <label>Opcion C</label><br/>
        <input type="text" name="opcionc" id="opcionc" value="{{$preguntas->opcionc}}" class="form-control"><br/>
        <label>Respuesta</label><br/>
        <input type="text" name="respuesta" id="respuesta" value="{{$preguntas->respuesta}}" class="form-control"><br/>
        <input type="submit" value="Actualizar" class="btn btn-success"><br/>
    </form>
   
  </div>
</div>
 
@stop