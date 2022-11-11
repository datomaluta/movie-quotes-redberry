<x-admin-layout>
    <form class="w-1/2 mx-auto mt-4" method="POST" action="/admin/movies">
        @csrf
        <div class="mb-4">
            <label class="block uppercase font-bold text-white mb-1" for="name">Movie Name</label>
            <input class="border border-gray-200 p-2 w-full rounded" type="name" id="name" type="text" name="name"/>

            
            @error('name')
                <span class="text-xs text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label class="block uppercase font-bold text-white mb-1" for="slug">Slug</label>
            <input class="border border-gray-200 p-2 w-full rounded" type="text" id="slug" type="text" name="slug" />
            @error('slug')
                <span class="text-xs text-red-500">{{ $message }}</span>
            @enderror
        </div>


        <button class="px-4 py-2 bg-green-500 text-white rounded mt-8 font-bold" type="submit">Add Movie</button>
    </form>
</x-admin-layout>
