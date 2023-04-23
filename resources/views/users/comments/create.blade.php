@extends('layouts.app')

@section('title', "Novo Comentário para o Usuário $user->id")

@section('content')
    <div class="w-full bg-white rounded px-10 py-0">
        <div class="text-2xl font-semibold leading-tigh py-2">
            <h1>Novo Comentário de Usuário</strong></h1>
        </div>
        <div class="w-full bg-white rounded px-0 py-5">
            <strong><a href="{{ route('comments.index', $user->id) }}" class="rounded-full bg-purple-500 hover:bg-purple-700 text-white font-bold py-3 px-5" style="padding-block: 5px">Voltar</a></strong>
        </div>
    </div>

    @include('includes/validations-form')
    
    <form action="{{ route("comments.store", $user->id) }}" method="POST" enctype="multipart/form-data">
        @include('users/comments/_partials/form')
    </form>

@endsection

</html>