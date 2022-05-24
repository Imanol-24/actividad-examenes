<?php

namespace App\Http\Controllers;
use App\Models\Pregunta;
use App\Models\User;
use Illuminate\Http\Request;


class PreguntaController extends Controller
{
    public function index()
    {
        $preguntas = pregunta::all();
        return view ('index')->with('preguntas', $preguntas);
    }
 
    
    public function create()
    {
        return view('preguntas.create');
    }
 
   
    public function store(Request $request)
    {
        $input = $request->all();
        Pregunta::create($input);
        return redirect('gestionPreguntas')->with('flash_message', 'Pregunta Agregado!');  
    }
 
    
    public function show($id)
    {
        $pregunta = Pregunta::find($id);
        return view('preguntas.show')->with('preguntas', $pregunta);
    }
 
    
    public function edit($id)
    {
        $pregunta = Pregunta::find($id);
        return view('preguntas.edit')->with('preguntas', $pregunta);
    }
 
  
    public function update(Request $request, $id)
    {
        $pregunta = Pregunta::find($id);
        $input = $request->all();
        $pregunta->update($input);
        return redirect('gestionPreguntas')->with('flash_message', 'pregunta Updated!');  
    }
    
 
   
    public function destroy(Pregunta $pregunta)
    {
        $pregunta->delete();
      
        return redirect('gestionPreguntas');
    }
}
