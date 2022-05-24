@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">Vista Pregunta</div>
    <div class="card-body">
     
   
          <div class="card-body">
          <h5 class="card-title">Pregunta : {{ $preguntas->pregunta }}</h5>
          <p class="card-text">Opcion A : {{ $preguntas->opciona }}</p>
          <p class="card-text">Opcion B : {{ $preguntas->opcionb }}</p>
          <p class="card-text">Opcion C : {{ $preguntas->opcionc }}</p>
          <p class="card-text">Respuesta : {{ $preguntas->respuesta }}</p>
    </div>
         
      <hr/>
    
    </div>
</div>

@endsection