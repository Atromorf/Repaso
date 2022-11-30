<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorExa;
use DB;
use Carbon\Carbon;

class ControladorClient extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resultClient=DB::table('tb_clientes')->get();

        return view('usuarios', compact('resultClient'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     * desplegar la vista formulario
     */
     public function create()
    {
        return view('registrosCliente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * procesar el recurdo
     */
    public function store(validadorExa $request)
    {
        $nombre=$request->input('txtNombre');
        DB::table('tb_clientes')->insert([
            'nombre' => $request->input('txtNombre'),
            'email' => $request->input('txtEmail'),
            'ine' => $request->input('txtINE'),
            'fecha' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        return redirect('clientes/create')->with('confirma',  compact('nombre'));
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
    public function update(validadorExa $request, $id)
    {
        DB::table('tb_clientes')->where('idCliente', $id)->update([
            'nombre' => $request->input('txtNombre'),
            'email' => $request->input('txtEmail'),
            'ine' => $request->input('txtINE'),
            'updated_at' => Carbon::now(),
        ]);
        return redirect('clientes/index')->with('confirmacion', 'Usuario actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tb_recuerdos')->where('idRecuerdo', $id)->delete();
        return redirect('recuerdo/index')->with('confirma', 'Recuerdo eliminado');
    }
}