@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h2>Listagem de Associados</h2>
            <table class="table table-hover">
                <thead>
                    <tr class="">
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">CNPJ/CPF</th>
                        <th scope="col">Celular</th>
                        <th scope="col">Dt. Cadastro</th>
                        <th scope="col">Dt. Saída</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($associados as $associado)
                        <tr>
                            <th scope="row">{{ $associado->id }}</th>
                            <td> {{ $associado->nome }} </td>
                            {{-- <td> {{ $associado->tipo_associado }} </td> --}}
                            <td> {{ $associado->cpf_cnpj }} </td>
                            <td> {{ $associado->celular }} </td>
                            <td> {{ $associado->created_at }} </td>
                            <td> {{ $associado->dt_saida }} </td>
                            <td>

                                <a href="{{ route('associados.show', ['associado' => $associado->id]) }}" 
                                    class="btn btn-sm btn-primary">Ver</a>
                                <a
                                     href="{{ route('associados.edit', ['associado' => $associado->id]) }}"
                                     class="btn btn-sm btn-primary">Editar</a>
                                <form 
                                    style="display: inline"
                                    action="{{ route('associados.destroy', ['associado' => $associado->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Deletar</button>
                                </form>
                                
                                    <button class="btn btn-sm btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                      +
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                      <li><a class="dropdown-item" href="#">Veículos</a></li>
                                      <li><a class="dropdown-item" href="#">Boletos</a></li>
                                      <li><a class="dropdown-item" href="#">Sinistros</a></li>
                                    </ul>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

       {{--  <div class="col-md-12">
            {{ $associados->links()}}
        </div> --}}

    </div>
</div>
    
@endsection