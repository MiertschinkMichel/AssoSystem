@extends('layouts.app')

@section('content')
<div class="container">
    @include('layouts._form_errors')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h2>Edição de Dados</h2>
            <a href=" {{ route('veiculos.index')}} " class="btn btn-sm btn-secondary">Voltar</a>
            <form action=" {{ route('veiculos.update', ['veiculo' => $veiculo->id]) }} " method="POST">
                @method('PUT')
                @include('veiculos._form')
                <br>
                <button type="submit" class="btn btn-success">Atualizar</button>
            </form>
        </div>
    </div>
</div>
@endsection