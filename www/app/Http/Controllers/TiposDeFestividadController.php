<?php

namespace App\Http\Controllers;

use App\TiposDeFestividad;
use Illuminate\Http\Request;


class TiposDeFestividadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tiposdefestividad = TiposDeFestividad::all();

        return $tiposdefestividad;
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TiposDeFestividad  $tiposDeFestividad
     * @return \Illuminate\Http\Response
     */
    public function show(TiposDeFestividad $tiposDeFestividad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TiposDeFestividad  $tiposDeFestividad
     * @return \Illuminate\Http\Response
     */
    public function edit(TiposDeFestividad $tiposDeFestividad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TiposDeFestividad  $tiposDeFestividad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TiposDeFestividad $tiposDeFestividad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TiposDeFestividad  $tiposDeFestividad
     * @return \Illuminate\Http\Response
     */
    public function destroy(TiposDeFestividad $tiposDeFestividad)
    {
        //
    }
}
