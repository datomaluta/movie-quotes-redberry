@props(['name'])

<div class="flex justify-between">
    <h1 class="text-white text-bold text-4xl">{{ $name }}</h1>
    <a href="/admin/movies/create" class="text-white px-4 py-2 font-bold rounded bg-blue-500 hover:bg-blue-700">Add
    </a>
</div>
