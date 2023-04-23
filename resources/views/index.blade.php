
@extends('/layouts/app')

@section('title', 'Listagem do Usuário')

@section('content')

    <h1>Bem vindo a API Projecty</h1> 
    <div>
        <a href="{{route('users.index')}}">listar usuarios</a>
    </div>
      
@endsection