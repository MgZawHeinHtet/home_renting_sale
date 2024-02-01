
<x-booking-layout :total="$total_days" :checkin="$check_in" :checkout="$check_out" :guest="$guest" :property="$property">
    <h4>
        <form action="/booking/{{ $property->id}}/step3">
         @csrf
         <label for="optional">optional</label>
         <input type="text" name="message" class="border">
         <button>submit</button>
        </form>
     </h4>
</x-booking-layout>