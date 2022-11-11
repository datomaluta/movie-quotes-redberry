<x-admin-layout>
    <form class="w-1/2 mx-auto mt-4" method="POST" action="/admin/quotes/{{$quote->id}}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="mb-4">
            <label class="block uppercase font-bold text-white mb-1" for="name">Quote Text</label>
            <input value="{{$quote->text}}" class="border border-gray-200 p-2 w-full rounded" type="text" id="text"  name="text"/>

            
            @error('quote')
                <span class="text-xs text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label class="block uppercase font-bold text-white mb-1" for="slug">Thumbnail</label>
            <input value="{{$quote->thumbnail}}" class="border border-gray-200 p-2 w-full rounded bg-white" type="file" id="thumbnail" name="thumbnail" />
            <img src="{{ asset('storage/' . $quote->thumbnail) }}" alt="ssss" class="rounded-xl h-12 mt-4 rounded">
            @error('thumbnail')
                <span class="text-xs text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label class="block uppercase font-bold text-white mb-1" for="slug">Select Movie</label>
            <select class="rounded" name="movie_id" id="movie_id" required>
                @php
                    $movies = \App\Models\Movie::all();
                @endphp

                @foreach ($movies as $movie)
                    <option {{ $quote->movie_id  == $movie->id ? 'selected' : '' }}
                        value={{ $movie->id }}>{{ $movie->name }}</option>
                @endforeach
            </select>
        </div>


        <button class="px-4 py-2 bg-green-500 text-white rounded mt-8 font-bold" type="submit">Save</button>
    </form>
</x-admin-layout>
