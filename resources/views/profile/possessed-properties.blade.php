<x-profile-layout>
    <h2 class="text-2xl text-gray-300 tracking-wide mb-10 underline underline-offset-8">Possessed Properties</h2>
    <div class="grid grid-cols-2 gap-5">
        @foreach ($properties as $property)
            <a href="/properties/{{ $property->id }}/sale">
                <x-property-card type="sale" :property="$property"></x-property-card>
            </a>
        @endforeach
    </div>
</x-profile-layout>