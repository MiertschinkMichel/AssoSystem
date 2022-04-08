<?php

namespace App\Http\Controllers;

use App\Models\sinistro;
use Illuminate\Http\Request;
use App\Http\Requests\StoresinistroRequest;
use App\Http\Requests\UpdatesinistroRequest;

class SinistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sinistros = Sinistro::all();
        return \view ('sinistros.index', \compact('sinistros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return \view ('sinistros.create', ['sinistro' => new Sinistro()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoresinistroRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoresinistroRequest $request)
    {
        
        Sinistro::create($request->all());
        return redirect()->route('sinistros.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sinistro  $sinistro
     * @return \Illuminate\Http\Response
     */
    public function show(sinistro $sinistro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sinistro  $sinistro
     * @return \Illuminate\Http\Response
     */
    public function edit(sinistro $sinistro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatesinistroRequest  $request
     * @param  \App\Models\sinistro  $sinistro
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatesinistroRequest $request, sinistro $sinistro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sinistro  $sinistro
     * @return \Illuminate\Http\Response
     */
    public function destroy(sinistro $sinistro)
    {
        //
    }
}
