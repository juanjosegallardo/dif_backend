<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use App\Models\Escuela;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Persona::all();
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

        $escuela = Escuela::where("cct","=", $request->cct)->first();
        

        $persona = new Persona();

        $persona->ap_paterno = $request->ap_paterno;
        $persona->ap_materno = $request->ap_materno;
        $persona->nombre = $request->nombre;
        $persona->curp = $request->curp;
        $persona->sexo = $request->sexo;
        $persona->fecha_nacimiento = $request->fecha_nacimiento;
        $persona->vulnerabilidad = $request->vulnerabilidad;
        //$persona->municipio_id = $request->municipio_id;
        $persona->localidad_id = $request->localidad_id;
        $persona->manzana = $request->manzana;
        $persona->calle = $request->calle;
        $persona->colonia = $request->colonia;
        $persona->numero_exterior = $request->numero_exterior;
        $persona->estudiante = $request->estudiante;
        
        $persona->save();        
        $persona->escuelas()->attach($escuela, ["estatus"=>"activo"]);
        
    }   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Persona::findOrFail($id);
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
        
        $persona = Persona::findOrFail($id);
        $persona->ap_paterno = $request->ap_paterno;
        $persona->ap_materno = $request->ap_materno;
        $persona->nombre = $request->nombre;
        $persona->curp = $request->curp;
        $persona->sexo = $request->sexo;
        $persona->fecha_nacimiento = $request->fecha_nacimiento;
        $persona->vulnerabilidad = $request->vulnerabilidad;
        $persona->municipio_id = $request->municipio_id;
        $persona->localidad_id = $request->localidad_id;
        $persona->manzana = $request->manzana;
        $persona->calle = $persona->calle;
        $persona->colonia = $request->colonia;
        $persona->numero_exterior = $request->numero_exterior;

        $persona->update();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $persona = Persona::findOrFail($id);
        $persona->delete();
    }   
    
}
