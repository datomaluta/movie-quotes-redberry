<x-admin-layout>
    <x-setting name="quotes" />

    <div class="mt-8 px-16">
        @foreach ($quotes as $quote)
            <x-quote-row id="{{$quote->id}}" text="{{$quote->text}}" thumbnail="{{$quote->thumbnail}}"/>
        @endforeach

        <div class="mt-10">
            {{ $quotes->links() }}
        </div>

    </div>
</x-admin-layout>
