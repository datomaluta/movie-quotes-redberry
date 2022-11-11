  <x-admin-layout>
      <div class="flex justify-between">
          <h1 class="text-white text-bold text-4xl">Movies</h1>
          <a href="/admin/movies/create"  class="text-white px-4 py-2 font-bold rounded bg-blue-500 hover:bg-blue-700" >Add Movie</a>
      </div>

      <div class="mt-8 px-16">
          @foreach ($movies as $movie)
              <div class="flex justify-between items-center  py-4 border-b border-white">
                  <a class="text-white text-3xl w-[1/2] hover:underline" href="/movies/{{$movie->slug}}">{{$movie->name}}</a>
                    <div>
                        <a class="text-white px-4 py-1 bg-green-500 rounded mr-1 hover:bg-green-700" href="/admin/movies/{{$movie->id}}">edit</a>
                        <a class="text-white px-4 py-1 bg-red-400 rounded hover:bg-red-600" href="#">delete</a>
                    </div>
              </div>
          @endforeach

      </div>
  </x-admin-layout>
