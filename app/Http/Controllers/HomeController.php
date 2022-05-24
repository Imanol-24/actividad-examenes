<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Pregunta;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function editusu(){
        return view('editusu');
    }
    public function update(Request $request, $id)
    {
        $users = Pregunta::find($id);
        $input = $request->all();
        $users->update($input);
        return redirect('gestionPreguntas')->with('flash_message', 'pregunta Updated!');  
    }
    public function examen(){
        $preguntas = pregunta::all();
        return view ('examen')->with('preguntas', $preguntas);
        
    }
}
