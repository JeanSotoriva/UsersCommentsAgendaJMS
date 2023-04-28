<div>

    @if (Session::has('success'))
        <div class="bg-green-100 border-l-4 border-green-500 text-orange-700 p-4" id="msg-succes">
            <strong>{{ session('success') }}</strong> 
        </div>
    @endif

    @if(Session::has('fail'))
        <div class="bg-red-100 border-l-4 border-red-500 text-orange-700 p-4" id="msg-fail">
            <strong>{{ session('fail') }}</strong>  
        </div>
    @endif

    @if(Session::has('warning'))
        <div class="bg-yellow-100 border-l-4 border-yellow-500 text-orange-700 p-4" id="msg-warning">
            <strong>{{ session('warning') }}</strong>  
        </div>
    @endif

    @if(Session::has('info'))
        <div lass="bg-yellow-100 border-l-4 border-yellow-500 text-orange-700 p-4" id="msg-info">
            <strong>{{ session('info') }}</strong>  
        </div>
    @endif
</div>


