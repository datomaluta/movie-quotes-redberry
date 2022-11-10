<x-layout>
    <div class="flex flex-col items-center mt-56">
        <div class="max-w-[43.8rem] max-h-[24.13rem] mb-16">
            <img class="w-full h-full rounded-[0.625rem]" src="{{asset('storage/thumbnails/' . $quote->thumbnail)}}" alt="quoteim">
        </div>
        <h1 class="text-white text-5xl text-center leading-[3.35rem] mb-28">"{{$quote->text}}"</h1>

        <a class="text-white text-5xl text-center underline leading-[3.35rem]" href="movies/{{$quote->movie_id}}">{{$quote->movie->name}}</a>
    </div>
</x-layout>