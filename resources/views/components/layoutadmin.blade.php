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
    <script>
        const docId = (target) => {
            return document.getElementById(target);
        };
    </script>
    @stack('scripts')
</head>

<body class="bg-fixed bg-gradient-to-tr from-cyan-300 to-blue-400 w-full h-[100vh]">

    <div id="box"
         class="grid w-full h-full  grid-cols-[20rem,1fr]  grid-rows-[2.5rem,1fr] transition-all overflow-hidden overflow-y-auto">
        <header class="flex items-center w-full h-full col-span-2 px-2 bg-gray-800 shadow-md">
            <button id="btnmenu"
                    onclick="{
                        const box = docId(`box`);
                        const newclass = '!grid-cols-[0px,1fr]' ;
                        box.classList.toggle(newclass) 
                    }"
                    class="flex flex-col items-center w-10 py-2 space-y-1 text-2xl font-medium bg-gray-200 rounded-md">
                <div class="w-[80%] h-[3px] bg-gray-800"></div>
                <div class="w-[80%] h-[3px] bg-gray-800"></div>
                <div class="w-[80%] h-[3px] bg-gray-800"></div>
            </button>
        </header>
        <div class="col-span-1 bg-white shadow-md">

        </div>
        <div class="col-span-1 overflow-y-auto ">
            <div class="min-w-[20rem] p-2">
                <div class="w-full max-w-[1200px] m-auto bg-white p-2">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>




    @stack('dom')

</body>

</html>
