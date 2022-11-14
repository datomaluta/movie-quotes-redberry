<x-admin-layout>
    <form class="w-1/2 mx-auto mt-4" method="POST" action="/admin/movies">
        @csrf
        <x-form.input name="name"/>
        <x-form.input name="slug"/>
        <x-form.button>Add Movie</x-form.button>
    </form>
</x-admin-layout>
