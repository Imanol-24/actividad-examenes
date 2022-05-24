@extends('layouts.app')
@section('content')
 
<div class="card">
  <div class="card-header">Agregar Pregunta</div>
  <div class="card-body">
      
      <form action="{{ url('gestionPreguntas') }}" method="post">
        {!! csrf_field() !!}
        <label>Pregunta</label><br/>
        <input type="text" name="pregunta" id="pregunta" class="form-control"><br/>
        <label>Opcion A</label><br/>
        <input type="text" name="opciona" id="opciona" class="form-control"><br/>
        <label>Opcion B</label><br/>
        <input type="text" name="opcionb" id="opcionb" class="form-control"><br/>
        <label>Opcion C</label><br/>
        <input type="text" name="opcionc" id="opcionc" class="form-control"><br/>
        <label>Respuesta</label><br/>
        <input type="text" name="respuesta" id="respuesta" class="form-control"><br/>
        <input type="submit" value="Guardar" class="btn btn-success">
    </form>
    <div className="d-flex flex-column text-center">
      <a href="{{ url('/gestionPreguntas') }}" class="btn btn-success btn-sm" title="gestion">
        <i class="fa fa-plus" aria-hidden="true"></i>Regresar
      </a>
    </div>
  </div>
</div>
 
@stop