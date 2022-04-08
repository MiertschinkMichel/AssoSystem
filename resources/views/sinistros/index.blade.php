@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h2>Sinistros</h2>
                <table class="table table-hover">
                    <thead>
                        <tr class="">
                            <th scope="col">#</th>
                            <th scope="col">Associado</th>
                            <th scope="col">Veículo</th>
                            <th scope="col">Data do Sinistro</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Valor do Veículo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sinistros as $sinistro)
                            <tr>
                                <th scope="row">{{ $sinistro->id }}</th>
                                <td> {{ $sinistro->associado_id }} </td>
                                <td> {{ $sinistro->veiculo_1 }} </td>
                                <td> {{ $sinistro->dt_sinistro }} </td>
                                <td> {{ $sinistro->descricao }} </td>
                                <td> {{ $sinistro->vl_veiculo}} </td>
                                <td>
                                    <a
                                         href="{{ route('sinistros.edit', ['sinistro' => $sinistro->id]) }}"
                                         class="btn btn-sm btn-primary">
                                         Editar
                                    </a>
                                    <form 
                                        style="display: inline"
                                        action="{{ route('sinistros.destroy', ['sinistro' => $sinistro->id]) }}" method="POST">
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