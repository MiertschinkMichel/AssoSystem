@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h2>Dados do Associado</h2>
                <div class="col-md-12">
                    <a href=" {{ route('associados.index')}} " 
                        class="btn btn-sm btn-secondary">Voltar</a> 
                    <a href=" {{ route('associados.edit', ['associado' => $associado->id]) }}" 
                        class="btn btn-sm btn-primary">Editar</a>
                        <form 
                        style="display: inline"
                        action="{{ route('associados.destroy', ['associado' => $associado->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Deletar</button>
                    </form>
                </div>
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <th scope="row">Tipo Jurídico</th>
                                <td> {{ $associado->tipo_associado == 'cpf' ? 'Pessoa Física':'Pessoa Jurídica'}} </td>
                            </tr>
                            <tr>
                                <th scope="row">Associado</th>
                                <td> {{ $associado->nome }} </td>
                            </tr>

                            <tr>
                                <th scope="row">CPF / CNPJ</th>
                                <td> {{$associado->cpf_cnpj}} </td>
                            </tr>

                            <tr>
                                <th scope="row">IE / RG</th>
                                <td> {{$associado->ie_rg}} </td>
                            </tr>

                            <tr>
                                <th scope="row">Orgão Expedidor</th>
                                <td> {{$associado->orgao_expedidor}} </td>
                            </tr>

                            <tr>
                                <th scope="row">Data da Expedição</th>
                                <td type="date"> {{ $associado->dt_expedicao }} </td>
                            </tr>

                            <tr>
                                <th scope="row">Sexo</th>
                                <td> {{ $associado->sexo == 'm' ? 'Masculino':'Feminino'}} </td>
                            </tr>

                            <tr>
                                <th scope="row">Estado Civil</th>
                                <td>
                                    @switch($associado->estado_civil)
                                        @case(1)
                                            Solteiro
                                            @break
                    
                                        @case(2)
                                            Casado
                                            @break
                    
                                        @case(3)
                                            Divorciado
                                            @break
                                    @endswitch
                                </td>
                            </tr>
                            
                            <tr>
                                <th scope="row">Data de Nascimento</th>
                                <td> {{ $associado->dt_nascimento }} </td>
                            </tr>

                            <tr>
                                <th scope="row">Indicação</th>
                                <td> {{ $associado->indicacao }} </td>
                            </tr>

                            <tr>
                                <th scope="row">Nome Cobrança</th>
                                <td> {{$associado->nome_cobranca}} </td>
                            </tr>

                            <tr>
                                <th scope="row">Logradouro</th>
                                <td> {{$associado->logradouro}} </td>
                            </tr>

                            <tr>
                                <th scope="row">Nro</th>
                                <td> {{$associado->numero}} </td>
                            </tr>

                            <tr>
                                <th scope="row">Bairro</th>
                                <td> {{$associado->bairro}} </td>
                            </tr>

                            <tr>
                                <th scope="row">Cidade</th>
                                <td> {{$associado->cidade}} </td>
                            </tr>

                            <tr>
                                <th scope="row">UF</th>
                                <td> {{$associado->uf}} </td>
                            </tr>

                            <tr>
                                <th scope="row">CEP</th>
                                <td> {{$associado->cep}} </td>
                            </tr>

                            <tr>
                                <th scope="row">Telefone</th>
                                <td> {{$associado->telefone}} </td>
                            </tr>

                            <tr>
                                <th scope="row">Celular</th>
                                <td> {{$associado->celular}} </td>
                            </tr>

                            <tr>
                                <th scope="row">Email</th>
                                <td> {{$associado->email}} </td>
                            </tr>

                            <tr>
                                <th scope="row">Protesta título</th>
                                <td> {{$associado->protesta_titulo}} </td>
                            </tr>

                            <tr>
                                <th scope="row">Rateio bloqueado</th>
                                <td> {{$associado->rateio_bloqueado}} </td>
                            </tr>

                            <tr>
                                <th scope="row">Dt. Inclusão</th>
                                <td> {{$associado->created_at}} </td>
                            </tr>

                            <tr>
                                <th scope="row">Dt. Saída</th>
                                <td> {{$associado->dt_saida}} </td>
                            </tr>
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
@endsection