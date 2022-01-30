<?php

namespace App\Http\Controllers;

use App\Models\notas;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class notasContables extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $NotaContable = new notas();
        $NotaContable->id = $request->id;
        $NotaContable->tipoNota = $request->tipoNota;
        $NotaContable->valorTotal = $request->valorTotal;
        $NotaContable->valorAbonado = $request->valorAbonado;
        // $NotaContable->fechaAbonos = $request->fechaAbonos;
        $NotaContable->save();

        return response()->json($NotaContable)->setStatusCode(Response::HTTP_OK);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $notasContables = notas::where('tipoNota','Activa')->get();

        return response()->json(['notasContables' => $notasContables])->setStatusCode(Response::HTTP_OK); // 200
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
