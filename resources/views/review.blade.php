<x-layout>
    <form action="/properties/1/review" method="POST">
        @csrf
        <input type="text" class="border" name="review">
        <button class="px-2 py-2 bg-green-500">send</button>
    </form>
</x-layout>