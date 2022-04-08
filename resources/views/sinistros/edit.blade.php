@extends('layouts.app')

@section('content')
<div class="container">
    @include('layouts._form_errors')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h2>Edição de Dados</h2>
            <a href=" {{ route('bancos.index')}} " class="btn btn-sm btn-secondary">Voltar</a>
            <form action=" {{ route('bancos.update', ['banco' => $banco->id]) }} " method="POST">
                @method('PUT')
                @include('bancos._form')
                <br>
                <button type="submit" class="btn btn-success">Atualizar</button>
            </form>
        </div>
    </div>
</div>
@endsection