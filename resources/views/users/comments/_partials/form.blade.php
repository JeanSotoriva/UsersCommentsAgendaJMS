<div class="w-full bg-white shadow-md rounded px-10 py-12">
    @csrf
    <textarea name="body" cols="30" rows="10" placeholder="comentário" class="form-control block w-full px-3 py-1.5 text-base font-normal text-black-700 bg-gray bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-black-700 focus:bg-gray focus:border-blue-600 focus:outline-none">{{ $comment->body ?? old('body') }}</textarea> 

    <label for="visible">
        <input type="checkbox" name="visible"
            @if(isset($comment) && $comment->visible)
                checked="checked"
            @endif 
        >
        Visível?
    </label>

   <button type="submit" name="enviar" class="w-full shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
        Enviar
    </button>
</div>