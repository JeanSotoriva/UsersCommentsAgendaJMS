@if ($errors->any())
    <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-2" >
        <ul>
            @foreach ($errors->all() as $error)
                <li class="errors">
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
@endif