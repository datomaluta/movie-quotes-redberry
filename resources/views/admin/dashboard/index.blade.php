<x-admin-layout>
  <div class="h-full flex justify-center items-center flex-col gap-4">
    <a class="bg-blue-500 px-4 py-2 font-bold rounded text-white text-4xl" href="{{route('admin.movies.index')}}">Create or Edit Movies</a>
    <a class="bg-blue-500 px-4 py-2 font-bold rounded text-white text-4xl" href="{{route('admin.quotes.index')}}">Create or Edit Quotes</a>
  </div>
</x-admin-layout>