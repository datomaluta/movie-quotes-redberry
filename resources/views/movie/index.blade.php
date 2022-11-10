<x-layout>
    <div class="flex flex-col mx-auto mt-20 max-w-[46.7rem]">
        <h1 class="text-5xl text-white mb-20">{{ $movie->name }}</h1>

        @foreach ($quotes as $quote)
            <x-quote-card imgsrc="{{ $quote->thumbnail }}" quotetext="{{ $quote->text }}" />
        @endforeach

    </div>
</x-layout>
