<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible"
          content="ie=edge">
    <title>admin</title>
    @vite('resources/js/app.js')
    @stack('scripts')
</head>

<body class="bg-fixed bg-gradient-to-tr from-cyan-300 to-blue-400">



    {{ $slot }}



</body>

</html>
