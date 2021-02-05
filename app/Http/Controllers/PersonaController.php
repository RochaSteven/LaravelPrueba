<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona;
use App\Http\Resources\PersonaResource;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $persona=Persona::paginate(10);
        return PersonaResource::collection($persona);
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
        //
        $persona= new Persona();
        $persona->namePersona=$request->namePersona;
        $persona->nombreCompleto=$request->nombreCompleto;
        $persona->email=$request->email;
        $persona->telefono=$request->telefono;
        $persona->edad=$request->edad;
        $persona->fechaNacimiento=$request->fechaNacimiento;

        if($persona->save()){
            return new PersonaResource($persona);
        }
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
        //
        $persona=Persona::findOrFail($id);
        $persona->namePersona=$request->namePersona;
        $persona->email=$request->email;
        $persona->telefono=$request->telefono;

        if($persona->save()){
            return new PersonaResource($persona);
        }
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

        $persona=Persona::findOrFail($id);

        if($persona->delete()){
            return new PersonaResource($persona);
        }
    }
}
