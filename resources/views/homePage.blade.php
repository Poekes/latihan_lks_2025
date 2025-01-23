<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible"
          content="ie=edge">
    <title>Home Galery</title>
    @vite('resources/js/app.js')
</head>

<body class="w-full bg-fixed bg-gradient-to-tr from-cyan-300 to-blue-400">

    <h1 class="m-4 text-4xl font-bold">Galery </h1>
    <div class="flex flex-wrap w-full gap-2 px-4 m-auto">

        @foreach ($galery as $item)
            <div class="w-[20rem] ">

                <img class=""
                     loading="lazy"
                     src="{{ asset('storage/galery/' . $item->file) }}"
                     alt="">
            </div>
        @endforeach
    </div>

    @auth
        <div class="sticky top-0 m-5">
            <form action="{{ route('logout') }}"
                  method="post"
                  class="w-40 h-12 bg-red-800 rounded-md">
                @csrf
                <button type="submit"
                        class="w-full h-full ">LOGOUT</button>
            </form>
        </div>
    @endauth

</body>

</html>
