@extends('layouts.app')

@section('title', 'Listagem do Usuário')

@section('content')
    <div class="text-2x1 font-semibold leading-tigh py-2 px-3" style="font-size:150%">
        Listagem dos usuarios
        <strong style="float: right">
            <a id="createUser" href="{{ route('users.create') }}" class="rounded-full bg-purple-500 hover:bg-purple-700 text-white font-bold py-0 px-4"> + </a>
        </strong>
    </div>
    <div class="focus:shadow-outline focus:outline-none py-2 px-3">
        <form action=" {{ route('users.index') }} " method="get">
            <input type="text" name="filtro" placeholder="Pesquisar" class="md:w-1/6 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-5 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500">
            <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-5 rounded">Pesquisar</button>
        </form>
    </div>

    
    <table class="min-w-full leading-normal shadow-md rounded-lg overflow-hidden">
        <thead>
          <tr>
            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">nome</th>
            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">e-mail</th>
            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Editar</th>
            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Detalhes</th>
            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Anotações</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        {{ $user->name }}
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">                   
                        {{ $user->email }}
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <a href="{{route('users.edit', $user->id)}}" class="bg-green-200 rounded-full py-2 px-6">editar
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <a href="{{route('users.show', $user->id)}}" class="bg-orange-200 rounded-full py-2 px-6">detalhes</a>
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <a href="{{route('comments.index', $user->id)}}" class="bg-blue-200 rounded-full py-2 px-6">anotações</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $users->appends(['filtro' => request()->get('filtro', '')])->links() }}
@endsection