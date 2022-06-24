@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2 text-center">
                <h1>CRUD - Laravel</h1>
                <div class="row">
                    <div class="col-sm-3">
                    <a href="{{ route('register') }}" class="btn btn-dark my-3">Cadastrar Usuário</a>
                </div>
                <div class="col-sm-3">
                    <a href="{{ route('list.users') }}" class="btn btn-dark my-3">Ver lista de Usuários</a>
                </div>
                {{-- <div class="col-sm-2">
                    <a href="{{ route('api.index') }}" class="btn btn-dark my-3">API</a>
                </div> --}}
            </div>
        </div>
    </div>
@endsection
