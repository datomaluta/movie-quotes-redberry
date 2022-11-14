<!DOCTYPE html>
<html class="h-screen">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>Movies and Quotes</title>
</head>

<body class="h-screen bg-gradient-radial from-neutral-600 to-neutral-700 font-sansation-reg">
    {{ $slot }}


    @auth
        <form id="logout-form" method="POST" action="/logout" class="bg-white text-black p-2 fixed top-5 right-5 rounded"
            class="hidden">
            @csrf
            <button type="submit">Log Out</button>
        </form>
    @else
        <a class="bg-white text-black p-2 fixed top-5 right-5 rounded" href="/login">Log In</a>
    @endauth

</body>

</html>
