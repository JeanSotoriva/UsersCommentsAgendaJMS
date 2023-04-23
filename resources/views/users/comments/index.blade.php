@extends('layouts.app')

@section('title', "Comentários do Usuário $user->name")

@section('content')
    <div>
        <div class="text-2x1 font-semibold leading-tigh py-2 px-3" style="font-size:120%;">
            Comentários do Usuário:<strong style="color:blue;" class="px-5">{{ $user->name }}</strong>
        </div>
        <div style="float: right">
            <a href="{{ route('comments.create', $user->id) }}" class="rounded-full bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-3" style="">+</a>
            <a href="{{ route('users.index') }}" class="rounded-full bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-5" style="">Voltar</a>
        </div>
    </div>
    <div class="focus:shadow-outline focus:outline-none py-2 px-3">
        <form action=" {{ route('comments.index', $user->id) }} " method="get">
            <input type="text" name="filtro" placeholder="Pesquisar" class="md:w-1/6 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-5 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500">
            <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-5 rounded">Pesquisar</button>
        </form>
    </div>
    
    <table class="min-w-full leading-normal shadow-md rounded-lg overflow-hidden">
        <thead>
          <tr>
            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Conteudo</th>
            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Visível</th>
            <th class="px-7 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Editar</th>
            <th class="px-7 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Excluir</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($comments as $comment)
                <tr>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        {{ $comment->body }}
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm" >                   
                        {{ $comment->visible ? 'Sim' : 'Não'}}
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <a href="{{ route('comments.edit', ['user' => $user->id, 'id' => $comment->id ]) }}" class="rounded-full bg-gray-400 hover:bg-gray-600 text-white font-bold py-2 px-5">editar
                    </td>
                    <td class="px-5 py-5 border-b border-red-200 bg-white text-sm">
                        <a href="{{ route('comments.delete', $comment->id) }}" class="rounded-full bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-5">Excluir</a>
                    </td>        
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="py-4">
        {{ $comments->appends([
            'filtro' => request()->get('filtro', '')
        ])->links() }}
    </div>

@endsection