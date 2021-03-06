@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h2>Bancos</h2>
                <table class="table table-hover">
                    <thead>
                        <tr class="">
                            <th scope="col">#</th>
                            <th scope:"col">Cod. Febraban</th>
                            <th scope="col">Agencia</th>
                            <th scope="col">Conta</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Gerente</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bancos as $banco)
                            <tr>
                                <th scope="row">{{ $banco->id }}</th>
                                <td> {{ $banco->cod_febraban }} </td>
                                <td> {{ $banco->cod_agencia }} </td>
                                <td> {{ $banco->conta }} </td>
                                <td> {{ $banco->descricao }} </td>
                                <td> {{ $banco->gerente}} </td>
                                <td>
                                    <a
                                         href="{{ route('bancos.edit', ['banco' => $banco->id]) }}"
                                         class="btn btn-sm btn-primary">
                                         Editar
                                    </a>
                                    <form 
                                        style="display: inline"
                                        action="{{ route('bancos.destroy', ['banco' => $banco->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Deletar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection