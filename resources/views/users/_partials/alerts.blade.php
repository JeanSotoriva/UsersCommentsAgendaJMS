<div>
    @if(Session::has('success'))
        <div class="bg-green-100 border-l-4 border-green-500 text-orange-700 p-4">
            <strong>Usuário cadastrado com sucesso!</strong> 
        </div>
    @endif
    @if(Session::has('fail'))
        <div class="alert alert-danger">
        {{Session::get('fail')}}
        </div>
    @endif
    @if(Session::has('warning'))
        <div class="alert alert-danger">
        {{Session::get('warning')}}
        </div>
    @endif
    @if(Session::has('info'))
        <div class="alert alert-danger">
        {{Session::get('info')}}
        </div>
    @endif
</div>


