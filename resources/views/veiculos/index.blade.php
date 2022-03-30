@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h2>Veículos</h2>
                <table class="table table-hover">
                    <thead>
                        <tr class="">
                            <th scope="col">#</th>
                            <th scope:"col">Associado</th>
                            <th scope="col">Cod. FIPE</th>
                            <th scope="col">Placa</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Ano</th>
                            <th scope="col">Ativo</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($veiculos as $veiculo)
                            <tr>
                                <th scope="row">{{ $veiculo->id }}</th>
                                <td> Associado </td>
                                <td> {{ $veiculo->cod_fipe }} </td>
                                <td> {{ $veiculo->placa }} </td>
                                <td> {{ $veiculo->descricao }} </td>
                                <td> {{ $veiculo->ano }} </td>
                                <td> {{ $veiculo->ativo}} </td>
                                
                                <td>
                                    <a
                                         href="{{ route('veiculos.edit', ['veiculo' => $veiculo->id]) }}"
                                         class="btn btn-sm btn-primary">
                                         Editar
                                    </a>
                                    <form 
                                        style="display: inline"
                                        action="{{ route('veiculos.destroy', ['veiculo' => $veiculo->id]) }}" method="POST">
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