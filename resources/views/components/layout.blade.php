<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>Movies and Quotes</title>
    </head>
    <body class="h-screen bg-gradient-radial from-neutral-600 to-neutral-700">
        {{$slot}}
    </body>
</html>
