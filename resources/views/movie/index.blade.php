<x-layout>
    <div class="flex flex-col mx-auto mt-20 max-w-[46.7rem]">
        

        <h1 class="text-5xl text-white mb-20">{{ $movie->name }}</h1>

        @foreach ($quotes as $quote)
            <x-quote-card imgsrc="{{ $quote->thumbnail }}" quotetext="{{ $quote->text }}" />
        @endforeach

    </div>

    {{-- <div class="fixed top-[50%] left-14 translate-y-[-50%] flex flex-col">
        <a href="{{ route(Route::currentRouteName(), ['language' => 'en', 'movie' => $movie->slug]) }}"
            class="mb-4 rounded-full flex items-center justify-center w-12 h-12 {{ request()->language == 'en' ? 'text-black bg-white' : 'text-white bg-transparent border-2 border-white' }}">en</a>
        <a href="{{ route(Route::currentRouteName(), ['language' => 'ka', 'movie' => $movie->slug]) }}"
            class="mb-4 rounded-full flex items-center justify-center w-12 h-12 {{ request()->language == 'ka' ? 'text-black bg-white' : 'text-white bg-transparent border-2 border-white' }}">ka</a>
    </div> --}}
    
    <a class="bg-white text-black p-2 fixed top-5 right-5 rounded" href="/login">Log In</a>
</x-layout>
