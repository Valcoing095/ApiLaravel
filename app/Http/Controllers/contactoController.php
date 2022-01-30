<?php

namespace App\Http\Controllers;
use App\Models\contactos;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class contactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactos = contactos::all();
        return response()->json(['contactos' => $contactos])->setStatusCode(Response::HTTP_OK); // 200
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
        $contacto = new contactos();
        $contacto->cedulaNit = $request->cedulaNit;
        $contacto->nombre = $request->nombre;
        $contacto->apellido = $request->apellido;
        $contacto->direccion = $request->direccion;
        $contacto->telefono = $request->telefono;
        $contacto->email = $request->email;
        $contacto->save();

        return response()->json($contacto)->setStatusCode(Response::HTTP_OK);
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
