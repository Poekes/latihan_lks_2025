<x-layoutadmin>

    @session('success')
        <div class="fixed z-50 px-4 py-2 font-medium text-white bg-green-600 rounded-sm bottom-2"
             id="success">

            <h1>GAMBAR BERHASIL DI UPLOAD</h1>
            <script>
                setTimeout(() => {
                    docId('success').remove();
                }, 3000);
            </script>
        </div>
    @endsession

    <h1 class="mb-4 text-4xl font-medium">Add Images</h1>
    <form action="{{ route('galery.upload') }}"
          method="post"
          class="flex flex-col items-start w-full gap-2 font-medium"
          enctype="multipart/form-data">

        <div class="object-cover w-full bg-gray-700 h-[35rem] "
             id="previewImage">
            <img src=""
                 alt=""
                 class="object-contain w-full h-full">
        </div>
        @csrf
        <input type="file"
               name="gambar"
               id="gambar"
               accept="image/*"
               required
               class="w-56 bg-gray-400 rounded-md"
               multiple>

        <textarea name="info"
                  id="info"
                  required
                  placeholder="Description"
                  class="p-1 border rounded-sm w-96 "></textarea>
        <button type="submit"
                class="w-auto px-4 py-1 text-white bg-blue-400 rounded-md">Tambah</button>
    </form>

    @push('dom')
        <script>
            const inputGambar = docId('gambar');
            inputGambar.onchange = ({
                target
            }) => {
                const previewImage = docId('previewImage')

                const file = target.files[0]
                const img = previewImage.querySelector('img');

                const fileReader = new FileReader();
                fileReader.onload = (e) => {
                    img.src = e.target.result;
                }
                fileReader.readAsDataURL(file);
            }
        </script>
    @endpush
</x-layoutadmin>
