<?php

namespace App\Http\Controllers;

use App\Models\Configuracao;
use App\Http\Requests\StoreConfiguracaoRequest;
use App\Http\Requests\UpdateConfiguracaoRequest;

class ConfiguracaoController extends Controller
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
     * @param  \App\Http\Requests\StoreConfiguracaoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreConfiguracaoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Configuracao  $configuracao
     * @return \Illuminate\Http\Response
     */
    public function show(Configuracao $configuracao)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Configuracao  $configuracao
     * @return \Illuminate\Http\Response
     */
    public function edit(Configuracao $configuracao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateConfiguracaoRequest  $request
     * @param  \App\Models\Configuracao  $configuracao
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateConfiguracaoRequest $request, Configuracao $configuracao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Configuracao  $configuracao
     * @return \Illuminate\Http\Response
     */
    public function destroy(Configuracao $configuracao)
    {
        //
    }
}
