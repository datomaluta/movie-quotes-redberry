  <x-admin-layout>
      <div class="flex justify-between">
          <h1 class="text-white text-bold text-4xl">Movies</h1>
          <a href="/admin/movies/create"  class="text-white px-4 py-2 font-bold rounded bg-blue-500" >Add Movie</a>
      </div>

      <div class="mt-8 px-16">
          @foreach ($movies as $movie)
              <div class="flex justify-between items-center  py-4 border-b border-white">
                  <a class="text-white text-3xl w-[1/2]" href="#">{{$movie->name}}</a>
                    <div>
                        <a class="text-white px-4 py-1 bg-green-500 rounded mr-1" href="#">edit</a>
                        <a class="text-white px-4 py-1 bg-red-400 rounded" href="#">delete</a>
                    </div>
              </div>
          @endforeach

      </div>
  </x-admin-layout>
