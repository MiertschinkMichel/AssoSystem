@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <iframe src="https://estradas.com.br/" width="100%" height="600"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection