<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible"
          content="ie=edge">
    <title>login</title>
    @vite('resources/js/app.js')
</head>

<body
      class="bg-fixed bg-gradient-to-tr font-medium from-cyan-300 to-blue-400 flex justify-center items-center h-[100vh] w-full">
    @session('invalidlogin')
        <div class="absolute z-20 px-4 py-2 text-xl text-white bg-red-500 rounded-md bottom-10"
             id="invalidlogin">LOGIN GAGAL
            <script>
                setTimeout(() => document.getElementById('invalidlogin').remove(), 5000);
            </script>
        </div>
    @endsession
    @session('logout')
        <div class="absolute z-20 px-4 py-2 text-xl text-white bg-green-500 rounded-md bottom-10"
             id="invalidlogout">BERHASIL LOGOUT
            <script>
                setTimeout(() => document.getElementById('invalidlogout').remove(), 5000);
            </script>
        </div>
    @endsession
    <div class="w-80 h-[360px] bg-gray-50 rounded-md shadow-2xl p-2">
        <form action="{{ route('auth') }}"
              method="post"
              class="flex flex-col h-full p-2 space-y-1">
            @csrf
            <h1 class="text-4xl font-bold text-center">Login</h1>
            <label for="username"
                   class="text-lg font-medium text-gray-600">Username</label>
            <input type="text"
                   name="username"
                   id="username"
                   required
                   value="{{ old('username') }}"
                   class="w-full h-10 p-2 border border-blue-200 rounded-md @error('username') !border-red-600 @enderror shadow-lg">

            <label for="password"
                   class="text-lg font-medium text-gray-600">password</label>
            <input type="password"
                   name="password"
                   id="password"
                   required
                   class="w-full h-10 p-2 border border-blue-200 @error('password') !border-red-600 @enderror rounded-md shadow-lg">
            <div class="flex justify-between w-full py-1 pr-2 ">
                <a href="{{ route('home') }}"
                   class="text-blue-600 underline ">Kembali</a>

                <div>
                    <label for="showpass"
                           class="text-gray-500">lihat password</label>
                    <input type="checkbox"
                           onchange="{document.getElementById('password').type = event.target.checked ? 'text':'password';}"
                           id="showpass">
                </div>
            </div>


            <div class="grid w-full h-full place-items-end">
                <button class="col-span-1 px-3 py-2 text-white bg-blue-400 rounded-md shadow-md">LOGIN</button>
            </div>
        </form>

    </div>

</body>

</html>
