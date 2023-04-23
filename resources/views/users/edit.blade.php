@extends('layouts.app')

@section('title', "Editar Usuário { $user->name }")

@section('content')
    <div class="w-full bg-white rounded px-8 py-0">
        <div class="text-black font-bold py-0 px-1">
            <h1>Editar Usuário:<strong style="color:blueviolet; font-size: 120%" class="px-3">{{ $user->name }}</strong></h1>
        </div>
        <div class="w-full bg-white rounded px-0 py-5">
            <strong><a href="{{ route('users.index') }}" class="rounded-full bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4" style="padding-block: 5px">Voltar</a></strong>
        </div>
    </div>

    @include('includes/validations-form')
    
    <form action="{{ route("users.update", $user->id) }}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @include('users/_partials/form')
    </form>

@endsection

</html>