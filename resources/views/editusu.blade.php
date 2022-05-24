@extends('layouts.app')
@section('content')
 
<div class="card">
  <div class="card-header">Usuario</div>
  <div class="card-body">
      
      <form action="{{ url('editarusu/' ) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{ Auth::user()->id }}" id="id" />
        <label>Nombre</label><br/>
        <input type="text" name="name" id="name" value="{{ Auth::user()->name }}" class="form-control"><br/>
        <label>Correo</label><br/>
        <input type="text" name="email" id="email" value="{{ Auth::user()->email }}" class="form-control"><br/>
        {{-- <label>Contraseña</label><br/>
        <input type="text" name="password" id="password" value="{{ Auth::user()->password }}" class="form-control"><br/> --}}
        <label>Ocupación</label><br/>
        <input type="text" name="ocupacion" id="ocupacion" value="{{ Auth::user()->ocupacion }}" class="form-control"><br/>
        
        <input type="submit" value="Guardar" class="btn btn-success">
    </form>
    <div className="d-flex flex-column text-center">
      <a href="{{ url('/home') }}" class="btn btn-success btn-sm" title="gestion">
        <i class="fa fa-plus" aria-hidden="true"></i>Regresar
      </a>
    </div>
  </div>
</div>
 
@stop