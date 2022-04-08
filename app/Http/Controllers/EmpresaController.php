<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Requests\StoreEmpresaRequest;
use App\Http\Requests\UpdateEmpresaRequest;

class EmpresaController extends Controller
{

       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * Não será utilizado no momento pois existe apenas uma empresa cadastrada 
     */

    public function index()
    {
        $empresas = Empresa::all();
        return \view('empresas.index', \compact('empresas'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        return view ('empresas.create', ['empresa' => new Empresa()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEmpresaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmpresaRequest $request)

    {
        $this->validate($request, [
            'razao_social' => 'required',
            'cnpj' => 'required',
            'ie' => 'required',
            'dt_fundacao',
            'logradouro' => 'required',
            'numero' => 'required',
            'bairro' => 'required',
            'cidade' => 'required',
            'uf' => 'required',
            'cep' => 'required',
            'celular' => 'required',
            'email' => 'required',
        ]);

        Empresa::create($request->all()); 
        return redirect()->route('empresas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function show(Empresa $empresa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function edit(Empresa $empresa)
    {
        dd($empresa->all());
        return \view ('empresas.edit', \compact('empresa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEmpresaRequest  $request
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEmpresaRequest $request, Empresa $empresa)
    {
        $this->validate($request, [
            'razao_social' => 'required',
            'cnpj' => 'required',
            'ie' => 'required',
            'dt_fundacao',
            'logradouro' => 'required',
            'numero' => 'required',
            'bairro' => 'required',
            'cidade' => 'required',
            'uf' => 'required',
            'cep' => 'required',
            'celular' => 'required',
            'email' => 'required',
        ]);

        $empresa->update($request->all());
        return \redirect()->route('empresas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     *
     * Este não será utilizaedo pois a empresa não poderá ser excluída
     */
    public function destroy(Empresa $empresa)
    {
        $empresa->delete();
        return \redirect()->route('empresas.index');
    }
}