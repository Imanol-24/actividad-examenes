@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Menú') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    

                   
                    <div className="col-12 col-md-4 bg-white rounded-1 shadow-lg p-4">
                      <p>Usuario: {{ Auth::user()->name }} - {{$tipo = Auth::user()->ocupacion }}</p>
                      
                      @if ($tipo == 'maestro')
                          <div className="d-flex flex-column text-center">
                            <a href="{{ url('/gestionPreguntas') }}" class="btn btn-success btn-sm" title="gestion">
                              <i class="fa fa-plus" aria-hidden="true"></i> Gestion Preguntas
                            </a>
                          </div>
                          <br />
                          <div className="d-flex flex-column text-center">
                            <button class="btn btn-primary btn-lg btn-block" to="/PanelReportes">
                              Reportes
                            </button>
                          </div>
                          <br />
                          <div className="d-flex flex-column text-center">
                            <a href="{{ url('/editusu') }}" class="btn btn-success btn-sm" title="gestion">
                              <i class="fa fa-plus" aria-hidden="true"></i> Editar Usuario
                            </a>
                          </div>
                          <br />
                      @else
                          <div className="d-flex flex-column text-center">
                            <a href="{{ url('/editusu') }}" class="btn btn-success btn-sm" title="gestion">
                              <i class="fa fa-plus" aria-hidden="true"></i> Editar Usuario
                            </a>
                          </div>
                          <br />
                          <div className="d-flex flex-column text-center">
                            <a href="{{ url('/examen') }}" class="btn btn-success btn-sm" title="gestion">
                              <i class="fa fa-plus" aria-hidden="true"></i> Examen
                            </a>
                          </div>
                      @endif        
              
                        
                        
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
