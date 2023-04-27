@extends('layouts.app')

@section('title', 'Listagem do Usuário')

@section('content')
    <div class="w-full bg-white rounded px-5 py-0">
        <div class="text-2xl font-semibold leading-tigh py-2">
            <h1>Usuário:   <strong> {{$user->name }} </strong></h1>
        </div>
        <div class="w-full bg-white rounded px-0 py-5">
            <strong><a href="{{ route('users.index') }}" class="rounded-full bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4" style="padding-block: 5px">Voltar</a></strong>
        </div>
    </div>

    <div>
        <table class="min-w-full leading-normal shadow-md rounded-lg overflow-hidden">
            <thead>
              <tr>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">nome</th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">e-mail</th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Deletar</th>
            </tr>
            </thead>
            <tbody>
                <form action="{{ route('users.delete', $user->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <tr>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            {{ $user->name }}
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">                   
                            {{ $user->email }}
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <button type="submit" class="rounded-full bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4">Deletar</button>
                        </td>
                    </tr>
                </form>
            </tbody>
          </table>
    </div>
@endsection
</html>