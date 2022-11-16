<x-admin-layout>
    <form class="w-1/2 mx-auto mt-4" method="POST"
        action="{{ route('admin.movies.update', ['language' => app()->getLocale(), 'movie' => $movie->id]) }}">
        @csrf
        @method('PATCH')
        <x-form.input name='name' :value="old('name', $movie->getTranslations('name')['en'])" />
        <x-form.input name='nameinka' :value="old('nameinka', $movie->getTranslations('name')['ka'])" />
        <x-form.input name='slug' :value="old('slug', $movie->slug)" />

        <x-form.button>{{ __('Save') }}</x-form.button>
    </form>
</x-admin-layout>
