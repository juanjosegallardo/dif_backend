<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apoyo;

class ApoyoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Apoyo::all();
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

     /*
     $table->string("dependencia");
            $table->string("programa");
            $table->string("modalidad");
     */
    public function store(Request $request)
    {
        $apoyo = new Apoyo();

        $apoyo->dependencia = $request->dependencia;
        $apoyo->programa = $request->programa;
        $apoyo->modalidad = $request->modalidad;

        $apoyo->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Apoyo::findOrFail($id);
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
        $apoyo = Apoyo::findOrFail($id);

        $apoyo->dependencia = $request->dependencia;
        $apoyo->programa = $request->programa;
        $apoyo->modalidad = $request->modalidad;

        $apoyo->update();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $apoyo = Apoyo::findOrFail($id);
        $apoyo->delete();
    }
}
