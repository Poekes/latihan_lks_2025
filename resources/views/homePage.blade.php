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

<body class="bg-fixed bg-gradient-to-tr from-cyan-300 to-blue-400">

    <h1 class="font-bold h1">Galery Home</h1>


    @auth
        <div class="sticky top-0">
            <form action="{{ route('logout') }}"
                  method="post"
                  class="w-40 h-12 bg-red-800">
                @csrf
                <button type="submit"
                        class="w-full h-full">LOGOUT</button>
            </form>
        </div>
    @endauth

</body>

</html>
