<?php

namespace App\Http\Controllers;

use App\Models\cartera;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class carteraController extends Controller
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
        $cartera = new cartera();
        $cartera->id = $request->id;
        $cartera->contacto_id = $request->contacto_id;
        $cartera->estado = $request->estado;
        $cartera->valorTotal = $request->valorTotal;
        $cartera->tipo_nota = $request->tipo_nota;
        $cartera->save();

        return response()->json($cartera)->setStatusCode(Response::HTTP_OK);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $carteraCliente = cartera::where('contacto_id',$id)->get();

        return response()->json(['carteraCliente' => $carteraCliente])->setStatusCode(Response::HTTP_OK); // 200

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
