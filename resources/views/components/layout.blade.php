<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>Movies and Quotes</title>
    </head>
    <body class="bg-red-300">
            {{-- <h1>{{$quote->text}}</h1> --}}
        {{$slot}}
    </body>
</html>
