<div class="bg-white flex flex-col items-start p-4 sm:p-12 w-[65vw] lg:w-[85vw] rounded-xl gap-10">
    <x-booking.formfield :id="'Date'" :label="'Reservation Date'">
        <input type="date" id="Date" class="shadow-[0px_2px_6px_3px] shadow-dark-grey w-[8rem] sm:w-[15rem] text-xs sm:text-base rounded-xl p-2">
    </x-booking.formfield>
    <x-booking.formfield :id="'Package'" :label="'Select Your Package'">
        <select name="package" id="Package" class="shadow-[0px_2px_6px_3px] shadow-dark-grey w-[10rem] sm:w-[20rem] text-xs sm:text-base rounded-xl p-2">
          <option value="" disabled selected>Alamendah Trip</option>
        </select>
    </x-booking.formfield>
</div>