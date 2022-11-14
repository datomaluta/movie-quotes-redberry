@props(['id', 'text', 'thumbnail'])

<div class="flex justify-between items-center py-4 border-b border-white">
    <a class="text-white text-xl w-[1/2] hover:underline flex items-center" href="/quotes/{{ $id }}">
        <img class="h-10 rounded mr-2" src="{{ asset('storage/' . $thumbnail) }}" alt="quotedisp">
        <span>{{ $text }}</span></a>
    <div class="flex">
        <a class="text-white px-4 py-1 bg-green-500 rounded mr-2 hover:bg-green-700"
            href="/admin/quotes/{{ $id }}/edit">edit</a>
        <form action="/admin/quotes/{{ $id }}" method="POST">
            @csrf
            @method('DELETE')

            <button class="text-white px-4 py-1 bg-red-400 rounded hover:bg-red-600">Delete</button>
        </form>
    </div>
</div>
