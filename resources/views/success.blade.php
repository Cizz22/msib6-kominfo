<x-form-layout>
    <div class="max-w-lg mx-auto my-10 bg-white rounded-lg shadow-md p-5">
        <img class="w-32 h-32 rounded-full mx-auto" src="https://picsum.photos/200" alt="Profile picture">
        <h2 class="text-center text-2xl font-semibold mt-3"></h2>
        {{-- <p class="text-center text-gray-600 mt-1">Software Engineer</p> --}}
        {{-- <div class="flex justify-center mt-5">
            <a href="#" class="text-blue-500 hover:text-blue-700 mx-3">Twitter</a>
            <a href="#" class="text-blue-500 hover:text-blue-700 mx-3">LinkedIn</a>
            <a href="#" class="text-blue-500 hover:text-blue-700 mx-3">GitHub</a>
        </div> --}}
        <div class="mt-5">
            <p class="text-gray-600 mt-2">Data berhasil diinput</p>
        </div>
        <hr>
        <div class="flex-col justify-center mt-5">
            <p>Untuk melihat laporan buka halaman laporan berikut</p>
            <a href="{{ route('report.index') }}">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Table Laporan Kondisi Rumah
                </button>
            </a>
    </div>
</x-form-layout>
