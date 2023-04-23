@extends('layouts.app')

@section('title', "Editar Comentário do Usuário  $user->name ")

@section('content')
    <div class="w-full bg-white rounded px-8 py-0">
        <div class="text-black font-bold py-0 px-1">
            <h1>Editar Comentário:<strong style="color:blueviolet; font-size: 120%" class="px-3">{{ $user->name }}</strong></h1>
        </div>
        <div class="w-full bg-white rounded px-0 py-5">
            <strong><a href="{{ route('comments.index', $user) }}" class="rounded-full bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4" style="padding-block: 5px">Voltar</a></strong>
        </div>
    </div>

    @include('includes/validations-form')
    
    <form action="{{ route("comments.update", $comment->id) }}" method="post">
        @method('PUT')
        @include('users/comments/_partials/form')
    </form>

@endsection

</html>