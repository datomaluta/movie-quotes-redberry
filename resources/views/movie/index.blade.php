<x-layout>
    <div class="flex flex-col mx-auto mt-20 max-w-[46.7rem]">
        <h1 class="text-5xl text-white mb-20">{{ $movie->name }}</h1>

        @foreach ($quotes as $quote)
            <div class="max-w-[46.7rem] min-h-[33.3rem] bg-white mb-16 rounded-[0.625rem] border border-black overflow-hidden">
                <img class="w-full h-[26rem] object-cover" src="{{asset('storage/thumbnails/' . $quote->thumbnail)}}" alt="quoteimggg">
                <p class="text-4xl py-9 px-4">{{$quote->text}}</p>
            </div>
        @endforeach

    </div>
</x-layout>
