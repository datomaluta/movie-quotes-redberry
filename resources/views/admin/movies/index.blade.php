  <x-admin-layout>
      <x-setting name="Movies" />

      <div class="mt-8 px-16">
          @foreach ($movies as $movie)
              <x-movie-row id="{{$movie->id}}" name="{{$movie->name}}" slug="{{$movie->slug}}"/>
          @endforeach

          <div class="mt-10">
              {{ $movies->links() }}
          </div>

      </div>
  </x-admin-layout>
