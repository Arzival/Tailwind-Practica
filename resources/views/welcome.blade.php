<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>

<body>
        <div class="bg-sky-800 py-6 px-4 sm:p-6">
            <div class="max-w-xl mx-auto grid grid-cols-1 lg:max-w-5xl lg:gap-x-20 lg:grid-cols-2 border">
                <div class="relative p-3 col-start-1 row-start-1 flex flex-col-reverse rounded-lg bg-gradient-to-t from-black/75 via-black/0 sm:bg-none sm:row-start-2 sm:p-0">
                    <h1 class="text-white mt-1 text-lg font-semibold sm:text-slate-900 md:text-2xl dark:sm:text-white">ZED</h1>
                    <p class="text-white text-sm leading-4 font-medium sm:text-slate-500 dark:sm:text-slate-400">El maestro de las sombras</p>
                </div>
                <div class="grid gap-4 col-start-1 col-end-3 row-start-1 sm:mb-6 sm:grid-cols-8">
                    <img class="w-full h-80 object-cover rounded-lg sm:h-52 sm:col-span-4" src="{{ asset('img/Zed.jpg') }}" alt="">
                </div>
            </div>
    </div>
</body>

</html>
