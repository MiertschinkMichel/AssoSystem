@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h2>Lista de Veículos</h2>
                <table class="table table-hover">
                    <thead>
                        <tr class="">
                            <th scope="col">#</th>
                            <th scope:"col">Cod. Febraban</th>
                            <th scope="col">Agencia</th>
                            <th scope="col">Conta</th>
                            <th scope="col">Descrição</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bancos as $banco)
                            <tr>
                                <th scope="row">{{ $banco->id }}</th>
                                <td> Associado </td>
                                <td> {{ $banco->cod_fipe }} </td>
                                <td> {{ $banco->placa }} </td>
                                <td> {{ $banco->descricao }} </td>
                                <td> {{ $banco->ano }} </td>
                                <td> {{ $banco->ativo}} </td>
                                
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