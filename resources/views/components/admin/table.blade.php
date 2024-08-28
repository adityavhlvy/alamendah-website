<div id="{{ $id }}" class="w-full flex flex-col gap-4 {{ $hidden }}">
    <a href="{{ $routeAdd }}" class="p-3 bg-green-leaves text-white font-bold text-lg rounded-xl w-44">{{ $routeLabel }} + </a>
    <div class="bg-blue-sky rounded-t-2xl overflow-hidden">
        <table class="w-full text-center">
            <thead class="bg-blue-sky font-bold text-xs sm:text-base lg:text-xl">
                <tr>
                @foreach($keys as $key)
                    <td class="p-3 sm:p-5">{{ $key }}</td>
                @endforeach
                </tr>
            </thead>
            <tbody class="bg-white md:text-base text-[0.5rem] sm:text-sm">
                @foreach($datas as $data)
                    <tr>
                        @foreach($data as $d)
                        <td class="p-3 sm:p-5">
                            @if(is_array($d))
                                @foreach($d as $item)
                                    <p>{{ $item }}</p>
                                @endforeach
                            @else
                                {{ $d }}
                            @endif
                        </td>       
                        @endforeach
                        <td class="p-3 sm:p-5 flex items-center justify-center gap-1">
                            <a href="{{ route('main.'.$routeName.'.show', ['id' => $data['ID']]) }}"><x-svg.eye /></a>
                            <a href="{{ route('dashboard.form-update-'.$routeName, ['id' => $data['ID']]) }}"><x-svg.pencil /></a>
                            <a href="{{ route('dashboard.delete-'.$routeName, ['id' => $data['ID']]) }}" onclick="return confirm('Data ini akan dihapus, apakah anda yakin?')"><x-svg.trash /></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>