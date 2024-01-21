<x-profile-layout>

    {{-- accept section  --}}
    <div>
        <h4 class="text-3xl text-gray-200 underline underline-offset-8 mb-10">Schedule list</h4>
        {{-- container --}}
        <div class="space-y-5">
            @foreach ($schedules as $schedule)
                
            <x-schedule-card :schedule="$schedule"></x-schedule-card>
            @endforeach
        </div>
    </div>
</x-profile-layout>