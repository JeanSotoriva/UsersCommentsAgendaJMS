@extends('layouts.app')

@section('title', 'Novo usuário')

@section('content')
    <div class="w-full bg-white rounded px-10 py-0">
        <div class="text-2xl font-semibold leading-tigh py-2">
            <h1>Cadastrar novo Usuário</strong></h1>
        </div>
        <div class="w-full bg-white rounded px-0 py-5">
            <strong><a href="{{ route('users.index') }}" class="rounded-full bg-purple-500 hover:bg-purple-700 text-white font-bold py-3 px-5" style="padding-block: 5px">Voltar</a></strong>
        </div>
    </div>

    @include('includes/validations-form')
    
    <form action="{{ route("users.store") }}" method="POST" enctype="multipart/form-data">
        @include('users/_partials/form')
    </form>

@endsection

</html>