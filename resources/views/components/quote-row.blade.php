@props(['id', 'text', 'thumbnail'])

<div class="flex justify-between items-center py-4 border-b border-white">
    <a class="text-white text-xl w-[1/2] hover:underline flex items-center" href="{{route('quote',['language'=>app()->getLocale(), 'quote'=>$id])}}">
        <img class="h-10 rounded mr-2" src="{{ asset('storage/' . $thumbnail) }}" alt="quotedisp">
        <span>{{ $text }}</span></a>
    <div class="flex">
        <a class="text-white px-4 py-1 bg-green-500 rounded mr-2 hover:bg-green-700"
            href="{{route('admin.quotes.edit',['language'=>app()->getLocale(), 'quote'=>$id])}}">{{__('Edit')}}</a>
        <form action="{{route('admin.quotes.delete',['language'=>app()->getLocale(), 'quote'=>$id])}}" method="POST">
            @csrf
            @method('DELETE')

            <button class="text-white px-4 py-1 bg-red-400 rounded hover:bg-red-600">{{__('Delete')}}</button>
        </form>
    </div>
</div>
