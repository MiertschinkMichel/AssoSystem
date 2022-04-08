@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Sinistros</h3>
    @include('layouts._form_errors')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <form action=" {{ route('sinistros.store') }} " method="POST">
                @csrf
                @include('sinistros._form')
                <br>
                <button type="submit" class="btn btn-success">Cadastrar</button>
            </form>
        </div>
    </div>
</div>
@endsection