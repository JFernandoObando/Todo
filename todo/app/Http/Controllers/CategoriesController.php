<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;


class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias=Categoria::all();
        return view('categoria.index',['categoria'=>$categorias]);


    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            'nombre'=>'required|min:3'
        ]);
        $categorias=new Categoria;
        $categorias->nombre=$request->nombre;
        $categorias->save();
        return redirect('/categoria')->with('success', 'Categoria ingresada exitosamente');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   $categorias=Categoria::find($id);
        return view('categoria.show',['categoria'=>$categorias]);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      
        $categorias=Categoria::find($id);
        $categorias->nombre=$request->nombre;
        $categorias->save();
        return redirect('/categoria')->with('success', 'Categoria actualizada');
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categorias=Categoria::find($id);
        $categorias->todos()->each(function($todo){
            $todo->delete();
        });
        $categorias->delete();
        return redirect('/categoria')->with('success', 'Categoria eliminada');
 

    }


}
