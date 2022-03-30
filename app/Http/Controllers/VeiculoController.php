<?php

namespace App\Http\Controllers;

use App\Models\veiculo;
use Illuminate\Http\Request;
use App\Http\Requests\StoreveiculoRequest;
use App\Http\Requests\UpdateveiculoRequest;

class VeiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $veiculos = Veiculo::all();
        return \view('veiculos.index', \compact('veiculos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('veiculos.create', ['veiculo' => new Veiculo()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreveiculoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreveiculoRequest $request)
    {
        $this->validate($request, [
            'cod_fipe' => 'required',
            'placa' => 'required',
            'descricao' => 'required',
            'ano' => 'required',
            'modelo' => 'required',
            'chassi' => 'required',
            'renavan' => 'required',
            'categoria' => 'required',
            'dt_inclusao' => 'required'

        ]);

        Veiculo::create($request->all());
        return redirect()->route('veiculos.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\veiculo  $veiculo
     * @return \Illuminate\Http\Response
     */
    public function show(veiculo $veiculo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\veiculo  $veiculo
     * @return \Illuminate\Http\Response
     */
    public function edit(veiculo $veiculo)
    {
        return \view ('veiculos.edit', \compact('veiculo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateveiculoRequest  $request
     * @param  \App\Models\veiculo  $veiculo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateveiculoRequest $request, veiculo $veiculo)
    {
        $this->validate($request, [
            'cod_fipe' => 'required',
            'placa' => 'required',
            'descricao' => 'required',
            'ano' => 'required',
            'modelo' => 'required',
            'chassi' => 'required',
            'renavan' => 'required',
            'categoria' => 'required',
            'dt_inclusao' => 'required'

        ]);

        $veiculo->update($request->all());
        return redirect()->route('veiculos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\veiculo  $veiculo
     * @return \Illuminate\Http\Response
     */
    public function destroy(veiculo $veiculo)
    {
        $veiculo->delete();
        return \redirect()->route('veiculos.index');
    }
}
