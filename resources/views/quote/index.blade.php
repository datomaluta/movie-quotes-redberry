<x-layout>

    <div class="flex flex-col items-center mt-56">
        <div class="max-w-[43.8rem] max-h-[24.13rem] mb-16">
            <img class="w-full h-full rounded-[0.625rem]" src="{{asset('storage/' . $quote->thumbnail)}}" alt="quoteim">
        </div>
        <h1 class="text-white text-5xl text-center leading-[3.35rem] mb-28">"{{$quote->text}}"</h1>

        <a class="text-white text-5xl text-center underline leading-[3.35rem]" href="{{route('movie',['language'=>app()->getLocale(),'movie'=>$quote->movie->slug])}}">{{$quote->movie->name}}</a>

        <x-lang-buttons/>

        <div class="fixed top-[50%] left-14 translate-y-[-50%] flex flex-col">
            <a href="{{ route(Route::currentRouteName(), 'en') }}"
                class="mb-4 rounded-full flex items-center justify-center w-12 h-12 {{ request()->language == 'en' ? 'text-black bg-white' : 'text-white bg-transparent border-2 border-white' }}">en</a>
            <a href="{{ route(Route::currentRouteName(), 'ka') }}"
                class="mb-4 rounded-full flex items-center justify-center w-12 h-12 {{ request()->language == 'ka' ? 'text-black bg-white' : 'text-white bg-transparent border-2 border-white' }}">ka</a>
        </div>

    </div>
</x-layout>