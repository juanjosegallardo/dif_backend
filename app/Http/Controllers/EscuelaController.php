<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Escuela;

class EscuelaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Escuela::all();
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
        $escuela = new Escuela();
        $escuela->id_interno = $request->id_interno;
        $escuela->ruta_id = $request->ruta_id;
        $escuela->plantel = $request->plantel;
        $escuela->localidad_id = $request->localidad_id;
        $escuela->marginacion = $request->marginacion;
        $escuela->cct = $request->cct;
        $escuela->nivel = $request->nivel;

        $escuela->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Escuela::findOrFail($id);
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
        $escuela = Escuela::findOrFail($id);

        $escuela->id_interno = $request->id_interno;
        $escuela->ruta_id = $request->ruta_id;
        $escuela->plantel = $request->plantel;
        $escuela->localidad_id = $request->localidad_id;
        $escuela->marginacion = $request->marginacion;
        $escuela->cct = $request->cct;
        $escuela->nivel = $request->nivel;

        $escuela->update();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $escuela = Escuela::findOrFail($id);
        $escuela->delete();
    }
}
