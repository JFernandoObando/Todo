<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use App\Models\Categoria;

class TodosController extends Controller
{
    public function index(){
        $todos=Todo::all();
        $categories=Categoria::all();
        return view('todo.index',['todo'=>$todos,'categoria'=>$categories]);


    }

    public function store(Request $request){
        $request->validate([
            'nombre'=>'required|min:3'
        ]);
        $todos=new Todo;
        $todos->nombre=$request->nombre;
        $todos->categoria_id=$request->categoria_id;
        $todos->save();
        return redirect('/todo')->with('success', 'Pelicula ingresada exitosamente');


    }


    public function show($id){
        $todos=Todo::find($id);
        return view('todo.show',['todo'=>$todos]);


    }

    public function update(Request $request,$id){

        $todos=Todo::find($id);
        $todos->nombre=$request->nombre;
        $todos->save();
        return redirect('/todo')->with('success', 'Tarea actualizada');
 


    }

    
    public function destroy($id){

        $todos=Todo::find($id);
     
        $todos->delete();
        return redirect('/todo')->with('success', 'Tarea eliminada');
 


    }
}

