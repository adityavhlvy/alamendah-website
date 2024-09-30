@props(['routeAdd', 'routeLabel'])
<div id="{{ $id }}" class="w-full flex flex-col gap-4 {{ $hidden }}">
    @isset($routeAdd)
        <a href="{{ $routeAdd }}" class="p-3 bg-green-leaves text-white font-bold text-lg rounded-xl w-44">{{ $routeLabel }} + </a>
    @endif
    <div class="bg-blue-sky rounded-t-2xl overflow-hidden">
        <table class="w-full text-center">
            <thead class="bg-blue-sky font-bold">
                <tr>
                @foreach($keys as $key)
                    <td class="p-3 sm:p-5 text-[0.5rem] sm:text-base lg:text-xl">{{ $key }}</td>
                @endforeach
                </tr>
            </thead>
            <tbody class="bg-white md:text-base text-[0.5rem] sm:text-sm">
                @foreach($datas as $data)
                    <tr>
                        @foreach($data as $key => $d)
                        <td class="p-3 sm:p-2 break-all">
                            @if(is_array($d))
                                @foreach($d as $item)
                                    <p>{{ $item }}</p>
                                @endforeach
                            @elseif(is_bool($d))
                                @if($key === "Online")
                                    @if($d)
                                        <p class="bg-green-400 text-green-700 sm:py-1 text-[0.4rem] max-sm:w-10 sm:text-sm rounded-xl">Online</p>
                                    @else
                                        <p class=" bg-red-400 text-red-700 sm:py-1 text-[0.4rem] max-sm:w-10 sm:text-sm rounded-xl">Offline</p>
                                    @endif
                                @elseif($key === "isAdmin")
                                    <input type="checkbox" name="" id="isAdmin" @if($d) checked @endif class="sm:w-8 sm:h-8" />
                                    <input type="hidden" value="{{ $data['ID'] }}" id="Userid" />
                                @endif
                            @else
                                {{ $d }}
                            @endif
                        </td>       
                        @endforeach
                        <td class="p-3 sm:p-5 flex items-center justify-center gap-1">
                            @if($id != "User")
                                <a href="{{ route('main.'.$routeName.'.show', ['id' => $data['ID']]) }}"><x-svg.eye /></a>
                                <a href="{{ route('dashboard.form-update-'.$routeName, ['id' => $data['ID']]) }}"><x-svg.pencil /></a>
                            @endif
                            <a href="{{ route('dashboard.delete-'.$routeName, ['id' => $data['ID']]) }}" onclick="return confirm('Data ini akan dihapus, apakah anda yakin?')"><x-svg.trash /></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>