@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Cadastro de Bancos</h3>
    @include('layouts._form_errors')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <form action=" {{ route('bancos.store') }} " method="POST">
                @csrf
                @include('bancos._form')
                <br>
                <button type="submit" class="btn btn-success">Cadastrar</button>
            </form>
        </div>
    </div>
</div>
@endsection