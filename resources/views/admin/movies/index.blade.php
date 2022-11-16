  <x-admin-layout>
      {{-- <x-setting name="movies" /> --}}
      <div class="flex justify-between">
          <h1 class="text-white text-bold text-4xl">{{ __('Movies') }}</h1>
          <a href="{{ route('admin.movies.create', ['language' => app()->getLocale()]) }}"
              class="text-white px-4 py-2 font-bold rounded bg-blue-500 hover:bg-blue-700">{{ __('Add') }}
          </a>
      </div>


      <div class="mt-8 px-16">
          @foreach ($movies as $movie)
              <x-movie-row id="{{ $movie->id }}" name="{{ $movie->name }}" slug="{{ $movie->slug }}" />
          @endforeach

          <div class="mt-4 flex justify-center">
              {{ $movies->links() }}
          </div>
      </div>
  </x-admin-layout>
