<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/dist/app.css">
    <title>Document</title>
</head>
<body>
@include('_navigation')
<main class="">
    <h2 class="w-100 flex justify-center text-3xl">Title</h2>
    <ul class="flex flex-wrap gap-5">
    @foreach($projects as $projects)
        <li class="w-1/4 min-h flex flex-col border-4 border-red-500">
            <figure class="h-52 flex justify-center relative">
                <img class="object-contain w-100 h-100" src="https://placehold.co/208x100/png" alt="">
                <h3 class="absolute bottom-0 left-0 border-4 border-red-500 w-auto px-4 border-l-0 text-2xl translate-y-1/2 bg-white">{{$projects->titel}}</h3>
            </figure>
            <section class="h-16 flex justify-end">
                <button class="text-3xl px-5 text-red-500">></button>
            </section>
        </li>
        @endforeach
    </ul>
</main>
</body>
</html>