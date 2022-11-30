<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorBiblioteca;
use DB;
use Carbon\Carbon;

class ControladorLib extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resultForm=DB::table('tb_formulario')->get();

        return view('Formularios', compact('resultForm'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     * desplegar la vista formulario
     */
     public function create()
    {
        return view('registro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * procesar el recurdo
     */
    public function store(validadorBiblioteca $request)
    {
        $titulo=$request->input('txtTitulo');
        DB::table('tb_formulario')->insert([
            'ismn' => $request->input('txtISBN'),
            'titulo' => $request->input('txtTitulo'),
            'autor' => $request->input('txtAutor'),
            'paginas' => $request->input('txtPaginas'),
            'editorial' => $request->input('txtEditorial'),
            'email' => $request->input('txtEmail'),
            'fecha' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        return redirect('formulario/create')->with('confirmacion',  compact('titulo'));
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
        $consultaId=DB::table('tb_formulario')->where('idFormulario', $id)->first();
        
        return view('editar', compact('consultaId'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(validadorBiblioteca $request, $id)
    {
        DB::table('tb_formulario')->where('idFormulario', $id)->update([
            'ismn' => $request->input('txtISBN'),
            'titulo' => $request->input('txtTitulo'),
            'autor' => $request->input('txtAutor'),
            'paginas' => $request->input('txtPaginas'),
            'editorial' => $request->input('txtEditorial'),
            'email' => $request->input('txtEmail'),
            'updated_at' => Carbon::now(),
        ]);
        return redirect('formulario/index')->with('confirmacion', 'Formulario actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tb_formulario')->where('idFormulario', $id)->delete();
        return redirect('formulario/index')->with('confirma', 'Recuerdo eliminado');
    }
}