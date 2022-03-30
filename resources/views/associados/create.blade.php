@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Cadastro de Associado</h3>
    @include('layouts._form_errors')
    {{-- <a href=" {{ route('associados.index')}} " class="btn btn-sm btn-secondary">Voltar</a> --}}
    <div class="row justify-content-center">
        <div class="col-md-12">
            <form action=" {{ route('associados.store') }} " method="POST">
                @csrf
                @include('associados._form')
                <br>
                <button type="submit" class="btn btn-success">Cadastrar</button>
            </form>
        </div>
    </div>
</div>
@endsection