@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Cadastro de Veículo</h3>
    @include('layouts._form_errors')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <form action=" {{ route('veiculos.store') }} " method="POST">
                @csrf
                @include('veiculos._form')
                <br>
                <button type="submit" class="btn btn-success">Cadastrar</button>
            </form>
        </div>
    </div>
</div>
@endsection