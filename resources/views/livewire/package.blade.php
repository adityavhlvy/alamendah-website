<div class="bg-white flex flex-col items-start p-4 sm:p-12 w-full sm:w-[65vw] lg:w-[85vw] rounded-xl gap-10">
    <x-booking.formfield :id="'Date'" :label="'Reservation Date'">
        <input type="date" id="Date" class="shadow-[0px_2px_6px_3px] shadow-dark-grey w-[8rem] sm:w-[15rem] text-xs sm:text-base rounded-xl p-2">
    </x-booking.formfield>
    <div class="flex md:flex-row flex-col gap-5 lg:gap-10 md:items-end">
        <x-booking.formfield :id="'Package'" :label="'Select Your Package'">
            <select name="package" id="Package" class="shadow-[0px_2px_6px_3px] shadow-dark-grey w-[12rem] sm:w-[15rem] lg:w-[20rem] text-xs sm:text-base rounded-xl p-2">
                <option disabled selected>Pilih paket</option>
                @foreach($packages as $package)
                    <option value="{{ $package['name'] }}">{{ $package['name'] }}</option>
                @endforeach
            </select>
        </x-booking.formfield>
        <x-booking.formfield :id="'Quantity'" :label="''">
            <input type="number" name="quantity" id="Quantity" placeholder="Quantity" class="shadow-[0px_2px_6px_3px] shadow-dark-grey w-[8rem] sm:w-[10rem] lg:w-[15rem] text-xs sm:text-base rounded-xl p-2">
        </x-booking.formfield>
        <script>const username = "{{ Auth::user()->name }}"</script>
    </div>
</div>
