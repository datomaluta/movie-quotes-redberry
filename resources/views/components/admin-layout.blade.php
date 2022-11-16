<!DOCTYPE html>
<html class="h-screen">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>Movies and Quotes</title>
</head>

<body class="h-screen bg-gradient-radial from-neutral-600 to-neutral-700 overflow-hidden">
    <div class="flex h-full">

        <div class="hidden lg:flex lg:flex-shrink-0">
            <div class="flex w-64 flex-col">
                <div class="flex min-h-0 flex-1 flex-col border-r border-gray-200 bg-gray-100">
                    <div class="flex flex-1 flex-col overflow-y-auto pt-5 pb-4">
                        <div class="flex flex-shrink-0 items-center px-4">
                            <img class="h-8 w-auto"
                                src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                                alt="Your Company">
                        </div>
                        <nav class="mt-5 flex-1" aria-label="Sidebar">
                            <div class="space-y-1 px-2">

                                <a href="{{route('admin.index',app()->getLocale())}}"
                                    class="{{ request()->is('admin') ? 'bg-gray-200 text-gray-900' : 'text-gray-600' }} group flex items-center px-2 py-2 text-sm font-medium rounded-md">

                                    <x-svgs.home/>
                                    {{__('Dashboard')}}
                                </a>

                                <a href="{{route('admin.movies.index',app()->getLocale())}}"
                                    class="{{ request()->is('admin/movies') ? 'bg-gray-200 text-gray-900' : 'text-gray-600' }} hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                                    {{__('Movies')}}
                                </a>

                                <a href="{{route('admin.quotes.index',app()->getLocale())}}"
                                    class="{{ request()->is('admin/quotes') ? 'bg-gray-200 text-gray-900' : 'text-gray-600' }} hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                                    {{__('Quotes')}}
                                </a>

                                {{-- <a href="{{ route(Route::currentRouteName(), 'en') }}">en</a>
                                <a href="{{ route(Route::currentRouteName(), 'ka') }}">ka</a> --}}
                                
                                {{-- <a href="{{ route(Route::currentRouteName(), ['language' => 'en','movie'=>request('movie')->id]) }}">en</a>
                                
                                <a href="{{ route(Route::currentRouteName(), ['language' => 'ka','movie'=>request('movie')->id]) }}">ka</a> --}}
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex min-w-0 flex-1 flex-col overflow-hidden">
            <div class="lg:hidden">
                <div class="flex items-center justify-between border-b border-gray-200 bg-gray-50 px-4 py-1.5">
                    <div>
                        <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                            alt="Your Company">
                    </div>
                </div>
            </div>
            <div class="relative z-0 flex flex-1 overflow-hidden">
                <main class="relative z-0 flex-1 overflow-y-auto focus:outline-none">
                    <div class="absolute inset-0 py-6 px-4 sm:px-6 lg:px-8">
                        <div class="h-full rounded-lg border-2 border-dashed border-gray-200 p-8 ">
                            {{ $slot }}

                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>


</body>

</html>
