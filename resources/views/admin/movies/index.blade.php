  <x-admin-layout>
      <x-setting name="movies" />

      <div class="mt-8 px-16">
          @foreach ($movies as $movie)
              <x-movie-row id="{{$movie->id}}" name="{{$movie->name}}" slug="{{$movie->slug}}"/>
          @endforeach

          <div class="mt-4 flex justify-center">
              {{ $movies->links() }}
          </div>
      </div>
  </x-admin-layout>
