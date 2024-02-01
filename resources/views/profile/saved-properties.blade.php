<x-profile-layout>
    <h2 class="text-2xl text-gray-300 tracking-wide mb-10 underline underline-offset-8">Saved Lists</h2>
    <div class="grid grid-cols-2 gap-5">
        @foreach ($properties as $property)
            <a href="/properties/{{ $property->id }}/sale">
                <x-property-card :type="$type" :property="$property"></x-property-card>
            </a>
        @endforeach
    </div>
    <div class="mt-5">
        {{ $properties->links() }}
    </div>
</x-profile-layout>