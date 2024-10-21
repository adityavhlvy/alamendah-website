<div class="author flex flex-row items-center gap-3">
    <select name="author[]" class="text-black rounded-xl border-none outline-none p-2 w-52">
      @isset($author)
        <option selected value="{{ $author['user']['id'] }}">{{ $author['user']['name'] }}</option>
      @else
        <option selected disabled>Pick Author</option>
      @endif
      @foreach($admins as $admin)
        @isset($author)
            @if($author['user']['id'] != $admin['user_id'])
                <option value="{{ $admin['user_id'] }}">{{ $admin['user']['name'] }}</option>
            @endif
        @else
            <option value="{{ $admin['user_id'] }}">{{ $admin['user']['name'] }}</option>
        @endif
      @endforeach
    </select>
    <button id="{{ $buttonId }}" type="button" class="rounded-full bg-white border-dark-grey border-[1px] px-[0.6rem] py-1 {{ $rotateButton }}">+</button>
</div>
