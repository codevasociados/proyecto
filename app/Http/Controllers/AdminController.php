<?php

namespace codev\Http\Controllers;

use Illuminate\Http\Request;
use codev\Admin;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins=Admin::get();

        return view('admins.index')->with('admins',$admins);
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
        $admin=new Admin;
        $admin->NOM_ADM=$request->nom_adm;
        $admin->PAT_ADM=$request->pat_adm;
        $admin->MAT_ADM=$request->mat_adm;
        $admin->DIR_ADM=$request->dir_adm;
        $admin->CI_ADM=$request->ci_adm;
        $admin->TEL_ADM=$request->tel_adm;
        $admin->NIVEL_ADM=$request->nivel_adm;
        $admin->save();
        $mensaje='Administrador registrado exitosamente';
        return redirect()->route('admin.index')->with(mensaje,'$mensaje');
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
