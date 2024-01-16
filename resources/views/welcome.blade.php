<x-app-layout>
    <div class="w-full py-4 px-8 mb-3 bg-white shadow-xl rounded-lg h-fit">
        <div>
            <h3>Aplikasi Pendataan Kondisi Rumah</h3><br>
            <hr>
            <a href="{{ route('form.index') }}">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Form Tambah Data Kondisi Rumah
                </button>
            </a>
            <hr>
            <a href="{{ route('report.index') }}">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Table Laporan Kondisi Rumah
                </button>
            </a>
        </div>
    </div>

    </x-app-layout>
