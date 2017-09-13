<?php

namespace codev\Http\Controllers;


use Illuminate\Http\Request;
use codev\Cliente; //llamammos al modelo para asi pueda interactuar con la base de datos

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //$clientes=Cliente::where('id','=',3)->select('NOM_CLIE')->get(); //esta consulta nos manda la consulta que hacemos
      $clientes=Cliente::get(); //llamando registros
      //dd($clientes); //prueba si manda datos
      return view('clientes.index')->with('clientes',$clientes);

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
        $cliente = new Cliente;
        $cliente -> CI_CLIE =$request-> ci;
        $cliente -> NOM_CLIE =$request-> nombre;
        $cliente -> PAT_CLIE =$request-> apellido_paterno;
        $cliente -> MAT_CLIE =$request-> apellido_materno;
        $cliente -> TEL_CLIE =$request-> Telefono;

        $cliente -> save();

        $mensaje='cliente registrado exitosamente';
        return redirect()->Route('cliente.index')
            ->with('mensaje', $mensaje);


    }


    public function elimina(Request $request)
    {
      $id=$request->id;
      $cliente=Cliente::find($id);
      $cliente->delete();
      $mensaje='cliente fue eliminado exitosamente';
      return redirect()->Route('cliente.index')
          ->with('mensaje2', $mensaje);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
