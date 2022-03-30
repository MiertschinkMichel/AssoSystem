@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h2>Empresas</h2>
                <table class="table table-hover">
                    <thead>
                        <tr class="">
                            <th scope="col">#</th>
                            <th scope="col">Razão Social</th>
                            <th scope="col">Nome Fantasia</th>
                            <th scope="col">CNPJ</th>
                            <th scope="col">Celular</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($empresas as $empresa)
                            <tr>
                                <th scope="row">{{ $empresa->id }}</th>
                                <td> {{ $empresa->razao_social }} </td>
                                <td> {{ $empresa->nome_fantasia }} </td>
                                <td> {{ $empresa->cnpj }} </td>
                                <td> {{ $empresa->celular }} </td>
                                <td> {{ $empresa->email }} </td>
                                <td>
                                        <a
                                         href="{{ route('empresas.edit', ['empresa' => $empresa->id]) }}"
                                         class="btn btn-sm btn-primary">Editar</a>
                                    <form 
                                        style="display: inline"
                                        action="{{ route('empresas.destroy', ['empresa' => $empresa->id]) }}" method="POST">
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