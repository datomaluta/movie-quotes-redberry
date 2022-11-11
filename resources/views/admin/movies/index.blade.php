  <x-admin-layout>
      <div class="flex justify-between">
          <h1 class="text-white text-bold text-4xl">Movies</h1>
          <a href="/admin/movies/create" class="text-white px-4 py-2 font-bold rounded bg-blue-500 hover:bg-blue-700">Add
              Movie</a>
      </div>

      <div class="mt-8 px-16 ">
          @foreach ($movies as $movie)
              <div class="flex justify-between items-center  py-4 border-b border-white">

                  <a class="text-white text-3xl w-[1/2] hover:underline"
                      href="/movies/{{ $movie->slug }}">{{ $movie->name }}</a>
                  <div class="flex">
                      <a class="text-white px-4 py-1 bg-green-500 rounded mr-1 hover:bg-green-700"
                          href="/admin/movies/{{ $movie->id }}/edit">edit</a>
                      <form action="/admin/movies/{{ $movie->id }}" method="POST">
                          @csrf
                          @method('DELETE')

                          <button class="text-white px-4 py-1 bg-red-400 rounded hover:bg-red-600">Delete</button>
                      </form>
                  </div>
              </div>
          @endforeach

          <div class="mt-10">
              {{ $movies->links() }}
          </div>

      </div>
  </x-admin-layout>
