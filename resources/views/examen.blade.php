@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
 
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Examen</h2>
                    </div>
                    <div class="card-body">
                        
                        {{-- <a href="{{ url('/preguntas/create') }}" class="btn btn-success btn-sm" title="Add New Student">
                            <i class="fa fa-plus" aria-hidden="true"></i> Agregar Nueva Pregunta
                        </a> --}}
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Pregunta</th>
                                        <th>Opcion A</th>
                                        <th>Opcion B</th>
                                        <th>Opcion C</th>
                                        {{-- <th>Seleccion</th> --}}
                                        <th>Correcta</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($preguntas as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->pregunta }}</td>
                                        <td>{{ $item->opciona }}</td>
                                        <td>{{ $item->opcionb }}</td>
                                        <td>{{ $item->opcionc }}</td>
                                        
 
                                        <td>
                                            {{-- <a href="{{ url('/pregunta/' . $item->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a> --}}
                                            {{-- <p>
                                                <input id="res" type="radio"  name="res" value="a"> A
                                                <input id="res" type="radio"  name="res" value="b"> B
                                                <input id="res" type="radio"  name="res" value="c"> C
                                            </p> --}}
                                        </td>
                                    </tr>
                                        
                                    @endforeach
                                    
                                </tbody>
                            </table>
                            {{-- {{$cont=1}}
                            @foreach($preguntas as $item)
                                    <form action="">
                                        {{$cont++}}
                                        <input id="res{{$item}}" type="input"  name="res{{$cont}}" value=""><br/> 
                                    </form>
    
                            @endforeach --}}
                                    
                        </div>
 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
