<?php

namespace App\Http\Controllers;

use App\Models\Associado;
use Illuminate\Http\Request; /* Usado para validação dos dados */
use App\Http\Requests\StoreAssociadoRequest;
use App\Http\Requests\UpdateAssociadoRequest;

class AssociadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $associados = Associado::all();
        return \view('associados.index', \compact('associados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Associado $associado)
    {        
        $tipoAssociado = Associado::getAssociadoType($associado->tipo_associado);
        return \view('associados.create' , ['associado' => new Associado(), 'tipoAssociado' => $tipoAssociado]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAssociadoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAssociadoRequest $request)
    {
        /* Validação para o banco de dados */

        $this->validate($request, [
            'tipo_associado' => 'required',
            'nome' => 'required',
            'cpf_cnpj' => 'required',
            'ie_rg' => 'required',
            'logradouro' => 'required',
            'numero' => 'required',
            'bairro' => 'required',
            'cidade' => 'required',
            'uf' => 'required',
            'cep' => 'required',
            'celular' => 'required',
            'email' => 'required',
        ]);
        
        Associado::create($request->all());
        return redirect()->route('associados.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Associado  $associado
     * @return \Illuminate\Http\Response
     */
    public function show(Associado $associado)
    {
        return \view('associados.show', \compact('associado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Associado  $associado
     * @return \Illuminate\Http\Response
     */
    public function edit(Associado $associado)
    {
        return \view ('associados.edit', \compact('associado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAssociadoRequest  $request
     * @param  \App\Models\Associado  $associado
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAssociadoRequest $request, Associado $associado)
    {

        /* Validação para o banco de dados */

        $this->validate($request, [
            'tipo_associado' => 'required',
            'nome' => 'required',
            'cpf_cnpj' => 'required',
            'ie_rg' => 'required',
            'logradouro' => 'required',
            'numero' => 'required',
            'bairro' => 'required',
            'cidade' => 'required',
            'uf' => 'required',
            'cep' => 'required',
            'celular' => 'required',
            'email' => 'required',
        ]);

        $associado->update($request->all());
        return redirect()->route('associados.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Associado  $associado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Associado $associado)
    {
        $associado->delete();
        return \redirect()->route('associados.index');
    }
}
