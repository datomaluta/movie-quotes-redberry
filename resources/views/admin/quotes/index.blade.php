<x-admin-layout>
    <div class="flex justify-between">
        <h1 class="text-white text-bold text-4xl">Quotes</h1>
        <a href="/admin/quotes/create" class="text-white px-4 py-2 font-bold rounded bg-blue-500 hover:bg-blue-700">Add
            Quote</a>
    </div>

    <div class="mt-8 px-16">
        @foreach ($quotes as $quote)
            <div class="flex justify-between items-center py-4 border-b border-white">
                <a class="text-white text-xl w-[1/2] hover:underline flex items-center" href="/quotes/{{ $quote->id }}">
                    <img class="h-10 rounded mr-2" src="{{ asset('storage/thumbnails/' . $quote->thumbnail) }}"
                        alt="quotedisp">
                    <span>{{ $quote->text }}</span></a>
                <div class="flex">
                    <a class="text-white px-4 py-1 bg-green-500 rounded mr-2 hover:bg-green-700"
                        href="/admin/quotes/{{ $quote->id }}/edit">edit</a>
                    <form action="/admin/movies/{{ $quote->id }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button class="text-white px-4 py-1 bg-red-400 rounded hover:bg-red-600">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach

        {{-- <div class="mt-10">
            {{ $quotes->links() }}
        </div> --}}

    </div>
</x-admin-layout>
