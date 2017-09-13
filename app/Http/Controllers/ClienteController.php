<?php

namespace codev\Http\Controllers;

use Illuminate\Http\Request;
//llamamos  al modelo
use codev\Cliente;
class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes=Cliente::get();//llamando registros
        //$consulta=cliente::where('id','=',3)->select('nom_clie')->get();
        //dd($clientes); probar mediante consola
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
        $cliente=new Cliente;
        $cliente->NOM_CLIE=$request->nom_clie;
        $cliente->PAT_CLIE=$request->pat_clie;
        $cliente->MAT_CLIE=$request->mat_clie;
        $cliente->CI_CLIE=$request->ci_clie;
        $cliente->TEL_CLIE=$request->tel_clie;

        $cliente->save();
        $mensaje='Cliente registrado exitosamente';
        return redirect()->route('cliente.index')->with('mensaje',$mensaje);
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
    public function update(Request $request)
    {
      $id=$request->id;
      $cliente=Cliente::Find($id);
      $cliente->NOM_CLIE=$request->nom_clie;
      $cliente->PAT_CLIE=$request->pat_clie;
      $cliente->MAT_CLIE=$request->mat_clie;
      $cliente->CI_CLIE=$request->ci_clie;
      $cliente->TEL_CLIE=$request->tel_clie;

      $cliente->save();
      $mensaje='Cliente registrado exitosamente';
      return redirect()->route('cliente.index')->with('mensaje',$mensaje);
    }
    public function updatecli(Request $request)
    {
      $id=$request->id;
      $cliente=Cliente::Find($id);
      $cliente->NOM_CLIE=$request->nom_clie;
      $cliente->PAT_CLIE=$request->pat_clie;
      $cliente->MAT_CLIE=$request->mat_clie;
      $cliente->CI_CLIE=$request->ci_clie;
      $cliente->TEL_CLIE=$request->tel_clie;

      $cliente->save();
      $mensaje='Cliente registrado exitosamente';
      return redirect()->route('cliente.index')->with('mensaje',$mensaje);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function eliminar(Request $request)
     {
         $id=$request->id;
         $cliente=Cliente::find($id);
         $cliente->delete();
         $mensaje2='Cliente eliminado exitosamente';
         return redirect()->route('cliente.index')->with('mensaje2',$mensaje2);
     }
    public function destroy($id)
    {
        //
    }
}
