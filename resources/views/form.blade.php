<x-form-layout>
    <!-- component -->
    <div class="min-h-screen p-6 bg-gray-100 flex items-center justify-center">
        <div class="container max-w-screen-lg mx-auto">
            <div>
                <h2 class="font-semibold text-xl text-gray-600">Form Pendataan Kondisi Rumah</h2>
                <p class="text-gray-500 mb-6">Sebelum mengisi, silahkan baca panduan ....</p>
                Please use the button to auto-fill all fields for testing purposes. Note that you must change the NIK
                and Kartu Keluarga values, as they must be unique. <br>

                <button
                    class="flex justify-center items-center bg-blue-500 hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue text-white py-2 px-4 rounded-md transition duration-300 gap-2"
                    onclick="document.getElementById('nik').value = '1234567890123456';document.getElementById('no_kk').value = '1234567890123456';document.getElementById('nama').value = 'John Doe';document.getElementById('tempat_lahir').value = 'Jakarta';document.getElementById('tanggal_lahir').value = '1990-01-01';document.getElementById('jenis_kelamin').value = 'M';document.getElementById('agama').value = 'Islam';document.getElementById('pekerjaan').value = 'PNS';document.getElementById('pendidikan').value = 'S1';document.getElementById('warga_negara').value = 'WNI';document.getElementById('status_perkawinan').value = 'Kawin';document.getElementById('alamat').value = 'Jl. Jalan';document.getElementById('rt').value = '001';document.getElementById('rw').value = '001';document.getElementById('kelurahan').value = 'Kelurahan';document.getElementById('kecamatan').value = 'Kecamatan';document.getElementById('kota').value = 'Kota';document.getElementById('provinsi').value = 'Provinsi';document.getElementById('zipcode').value = '12345';document.getElementById('luas_rumah').value = '100';document.getElementById('jenis_lantai').value = 'Keramik';document.getElementById('jenis_dinding').value = 'Batako';document.getElementById('kondisi_atap').value = 'Seng';document.getElementById('sumber_air').value = 'Sumur';document.getElementById('sumber_listrik').value = 'PLN';document.getElementById('fasilitas_buang_air').value = 'Septic Tank';document.getElementById('akses_jalan').value = 'Aspal';document.getElementById('jarak_ke_pusat_kota').value = '1';document.getElementById('jarak_ke_puskesmas').value = '1';document.getElementById('jarak_ke_sekolah').value = '1';">
                    Auto Fill
                </button>
                <hr>

                <form method="POST" action="{{ route('form.submit') }}">
                    @csrf
                    <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                        @if ($errors->any())
                            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative"
                                role="alert">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach

                                </ul>
                            </div>
                            <hr>
                        @endif
                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-3">
                            <div class="text-gray-600">
                                <p class="font-medium text-lg">Informasi Individu</p>
                                <p>Silahkan isi </p>
                            </div>

                            <div class="sm:col-span-2">
                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                                    <div class="md:col-span-5">
                                        <label for="full_name">NIK</label>
                                        <input type="text" name="nik" id="nik"
                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" />
                                    </div>
                                </div>

                                @error('nik')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                @enderror

                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                                    <div class="md:col-span-5">
                                        <label for="full_name">No Kartu Keluarga</label>
                                        <input type="text" name="no_kk" id="no_kk"
                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                    </div>
                                </div>

                                @error('no_kk')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                @enderror

                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                                    <div class="md:col-span-5">
                                        <label for="full_name">Nama</label>
                                        <input type="text" name="nama" id="nama"
                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                    </div>
                                </div>

                                @error('nama')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                @enderror

                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                                    <div class="md:col-span-5">
                                        <label for="full_name">Tempat Lahir</label>
                                        <input type="text" name="tempat_lahir" id="tempat_lahir"
                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                    </div>
                                </div>

                                @error('tempat_lahir')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                @enderror

                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                                    <div class="md:col-span-5">
                                        <label for="full_name">Tanggal Lahir</label>
                                        <input type="date" name="tanggal_lahir" id="tanggal_lahir"
                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                    </div>
                                </div>

                                @error('tanggal_lahir')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                @enderror

                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                                    <div class="md:col-span-5">
                                        <label for="full_name">Jenis Kelamin</label>
                                        <select name="jenis_kelamin" id="jenis_kelamin"
                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50">
                                            <option value="">Pilih Jenis Kelamin</option>
                                            <option value="M">Pria</option>
                                            <option value="F">Wanita</option>
                                        </select>
                                    </div>
                                </div>

                                @error('jenis_kelamin')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                @enderror

                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                                    <div class="md:col-span-5">
                                        <label for="full_name">Agama</label>
                                        <select name="agama" id="agama"
                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50">
                                            <option value="">Pilih Agama</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen">Kristen</option>
                                            <option value="Katolik">Katolik</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Budha">Budha</option>
                                            <option value="Konghucu">Konghucu</option>
                                        </select>
                                    </div>
                                </div>

                                @error('agama')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                @enderror

                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                                    <div class="md:col-span-5">
                                        <label for="full_name">Pekerjaan</label>
                                        <input type="text" name="pekerjaan" id="pekerjaan"
                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                    </div>
                                </div>

                                @error('pekerjaan')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                @enderror

                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">

                                    <div class="md:col-span-5">
                                        <label for="full_name">Pendidikan</label>
                                        <select name="pendidikan" id="pendidikan"
                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50">
                                            <option value="">Pilih Pendidikan</option>
                                            <option value="Tidak Sekolah">Tidak Sekolah</option>
                                            <option value="SD">SD</option>
                                            <option value="SMP">SMP</option>
                                            <option value="SMA/SMK">SMA/SMK</option>
                                            <option value="Diploma">Diploma</option>
                                            <option value="S1">S1</option>
                                            <option value="S2">S2</option>
                                            <option value="S3">S3</option>

                                        </select>
                                    </div>
                                </div>
                                @error('pendidikan')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                @enderror

                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">

                                    <div class="md:col-span-5">
                                        <label for="full_name">Warga Negara</label>
                                        <select name="warga_negara" id="warga_negara"
                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50">
                                            <option value="">Pilih Warga Negara</option>
                                            <option value="WNI">WNI</option>
                                            <option value="WNA">WNA</option>
                                        </select>
                                    </div>
                                </div>
                                @error('warga_negara')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                @enderror

                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">

                                    <div class="md:col-span-5">
                                        <label for="full_name">Status Perkawinan</label>
                                        <select name="status_perkawinan" id="status_perkawinan"
                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50">
                                            <option value="">Pilih Status Perkawinan</option>
                                            <option value="Belum Kawin">Belum Kawin</option>
                                            <option value="Kawin">Kawin</option>
                                            <option value="Cerai Hidup">Cerai Hidup</option>
                                            <option value="Cerai Mati">Cerai Mati</option>
                                        </select>
                                    </div>
                                </div>

                                @error('status_perkawinan')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                @enderror




                            </div>

                        </div>

                        <hr>

                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-3">
                            <div class="text-gray-600">
                                <p class="font-medium text-lg">Informasi Tempat Tinggal</p>
                                <p>Silahkan isi</p>
                            </div>



                            <div class="sm:col-span-2">
                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                                    <div class="md:col-span-5">
                                        <label for="full_name">Alamat</label>

                                        <textarea name="alamat" id="alamat" class="h-25 border mt-1 rounded px-4 w-full bg-gray-50"></textarea>
                                    </div>
                                    @error('alamat')
                                        <p class="text-red-500 text-xs italic mt-4">
                                            {{ $message }}
                                        </p>
                                    @enderror


                                    <div class="md:col-span-2">
                                        <label for="">RT</label>
                                        <input type="text" name="rt" id="rt"
                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" />
                                    </div>
                                    @error('rt')
                                        <p class="text-red-500 text-xs italic mt-4">
                                            {{ $message }}
                                        </p>
                                    @enderror


                                    <div class="md:col-span-2">
                                        <label for="">RW</label>
                                        <input type="text" name="rw" id="rw"
                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" />
                                    </div>
                                    @error('rw')
                                        <p class="text-red-500 text-xs italic mt-4">
                                            {{ $message }}
                                        </p>
                                    @enderror

                                    <div class="md:col-span-2">
                                        <label for="country">Desa/Kelurahan</label>
                                        <div
                                            class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                            <input name="kelurahan" id="kelurahan"
                                                class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent" />
                                        </div>
                                    </div>
                                    @error('kelurahan')
                                        <p class="text-red-500 text-xs italic mt-4">
                                            {{ $message }}
                                        </p>
                                    @enderror

                                    <div class="md:col-span-2">
                                        <label for="country">Kecamatan</label>
                                        <div
                                            class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                            <input name="kecamatan" id="kecamatan"
                                                class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent" />
                                        </div>
                                    </div>
                                    @error('kecamatan')
                                        <p class="text-red-500 text-xs italic mt-4">
                                            {{ $message }}
                                        </p>
                                    @enderror

                                    <div class="md:col-span-2">
                                        <label for="state">Kota/Kabupaten</label>
                                        <div
                                            class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                            <input name="kota" id="kota"
                                                class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent" />
                                        </div>
                                    </div>
                                    @error('kota')
                                        <p class="text-red-500 text-xs italic mt-4">
                                            {{ $message }}
                                        </p>
                                    @enderror


                                    <div class="md:col-span-2">
                                        <label for="state">Provinsi</label>
                                        <div
                                            class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                            <input name="provinsi" id="provinsi"
                                                class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent" />
                                        </div>
                                    </div>
                                    @error('provinsi')
                                        <p class="text-red-500 text-xs italic mt-4">
                                            {{ $message }}
                                        </p>
                                    @enderror

                                    <div class="md:col-span-1">
                                        <label for="zipcode">Kode pos</label>
                                        <input type="text" name="zipcode" id="zipcode"
                                            class="transition-all flex items-center h-10 border mt-1 rounded px-4 w-full bg-gray-50" />
                                    </div>
                                    @error('zipcode')
                                        <p class="text-red-500 text-xs italic mt-4">
                                            {{ $message }}
                                        </p>
                                    @enderror

                                    {{-- <div class="md:col-span-2">
                                        <label for="soda">How many soda pops?</label>
                                        <div
                                            class="h-10 w-28 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                            <button tabindex="-1" for="show_more"
                                                class="cursor-pointer outline-none focus:outline-none border-r border-gray-200 transition-all text-gray-500 hover:text-blue-600">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mx-2"
                                                    viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                            <input name="soda" id="soda" placeholder="0"
                                                class="px-2 text-center appearance-none outline-none text-gray-800 w-full bg-transparent"
                                                value="0" />
                                            <button tabindex="-1" for="show_more"
                                                class="cursor-pointer outline-none focus:outline-none border-l border-gray-200 transition-all text-gray-500 hover:text-blue-600">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="h-4 w-4 mx-2 fill-current" viewBox="0 0 20 20"
                                                    fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div> --}}

                                </div>
                            </div>

                        </div>

                        <hr>

                        <hr>
                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-3">
                            <div class="text-gray-600">
                                <p class="font-medium text-lg">Informasi Kondisi Tempat Tinggal</p>
                                <p>Silahkan isi </p>
                            </div>

                            <div class="sm:col-span-2">
                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                                    <div class="md:col-span-5">
                                        <label for="state">Luas Rumah</label>
                                        <div
                                            class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                            <input name="luas_rumah" id="luas_rumah"
                                                class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent" />
                                        </div>
                                    </div>
                                    @error('luas_rumah')
                                        <p class="text-red-500 text-xs italic mt-4">
                                            {{ $message }}
                                        </p>
                                    @enderror

                                    <div class="md:col-span-5">
                                        <label for="state">Jenis Lantai (misalnya keramik, tanah, kayu, dll)</label>
                                        <div
                                            class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                            <input name="jenis_lantai" id="jenis_lantai"
                                                class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent" />
                                        </div>
                                    </div>
                                    @error('jenis_lantai')
                                        <p class="text-red-500 text-xs italic mt-4">
                                            {{ $message }}
                                        </p>
                                    @enderror


                                    <div class="md:col-span-5">
                                        <label for="state">Jenis Dinding (misalnya batako, bambu, tembok, kayu,
                                            dll)</label>
                                        <div
                                            class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                            <input name="jenis_dinding" id="jenis_dinding"
                                                class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent" />
                                        </div>
                                    </div>

                                    @error('jenis_dinding')
                                        <p class="text-red-500 text-xs italic mt-4">
                                            {{ $message }}
                                        </p>
                                    @enderror


                                    <div class="md:col-span-5">
                                        <label for="state">Jenis Atap (misalnya seng, genteng, ijuk, dll)</label>
                                        <div
                                            class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                            <input name="jenis_atap" id="kondisi_atap"
                                                class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent" />
                                        </div>
                                    </div>
                                    @error('jenis_atap')
                                        <p class="text-red-500 text-xs italic mt-4">
                                            {{ $message }}
                                        </p>
                                    @enderror


                                    <div class="md:col-span-5">
                                        <label for="state">Sumber Air (misalnya sumur, PDAM, dll)</label>
                                        <div
                                            class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                            <input name="sumber_air" id="sumber_air"
                                                class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent" />
                                        </div>
                                    </div>

                                    @error('sumber_air')
                                        <p class="text-red-500 text-xs italic mt-4">
                                            {{ $message }}
                                        </p>
                                    @enderror


                                    <div class="md:col-span-5">
                                        <label for="state">Sumber Listrik (misalnya PLN, genset, dll)</label>
                                        <div
                                            class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                            <input name="sumber_listrik" id="sumber_listrik"
                                                class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent" />
                                        </div>
                                    </div>
                                    @error('sumber_listrik')
                                        <p class="text-red-500 text-xs italic mt-4">
                                            {{ $message }}
                                        </p>
                                    @enderror


                                    <div class="md:col-span-5">
                                        <label for="state">Fasilitas Buang Air (misalnya septik tank, lubang tanah,
                                            sungai, dll)</label>
                                        <div
                                            class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                            <input name="fasilitas_buang_air" id="fasilitas_buang_air"
                                                class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent" />
                                        </div>
                                    </div>
                                    @error('fasilitas_buang_air')
                                        <p class="text-red-500 text-xs italic mt-4">
                                            {{ $message }}
                                        </p>
                                    @enderror


                                    <div class="md:col-span-5">
                                        <label for="state">Akses Jalan (misalnya jalan aspal, jalan tanah,
                                            dll)</label>
                                        <div
                                            class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                            <input name="akses_jalan" id="akses_jalan"
                                                class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent" />
                                        </div>
                                    </div>
                                    @error('akses_jalan')
                                        <p class="text-red-500 text-xs italic mt-4">
                                            {{ $message }}
                                        </p>
                                    @enderror


                                    <div class="md:col-span-2">
                                        <label for="state">Jarak ke Pusat Kota (KM)</label>
                                        <div
                                            class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                            <input name="jarak_ke_pusat_kota" id="jarak_ke_pusat_kota"
                                                class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent" />
                                        </div>
                                    </div>
                                    @error('jarak_ke_pusat_kota')
                                        <p class="text-red-500 text-xs italic mt-4">
                                            {{ $message }}
                                        </p>
                                    @enderror

                                    <div class="md:col-span-2">
                                        <label for="state">Jarak ke Puskesmas Terdekat (KM)</label>
                                        <div
                                            class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                            <input name="jarak_ke_puskesmas" id="jarak_ke_puskesmas"
                                                class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent" />
                                        </div>
                                    </div>
                                    @error('jarak_ke_puskesmas')
                                        <p class="text-red-500 text-xs italic mt-4">
                                            {{ $message }}
                                        </p>
                                    @enderror

                                    <div class="md:col-span-2">
                                        <label for="state">Jarak ke Sekolah terdekat (KM)</label>
                                        <div
                                            class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                            <input name="jarak_ke_sekolah" id="jarak_ke_sekolah"
                                                class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent" />
                                        </div>
                                    </div>
                                    @error('jarak_ke_sekolah')
                                        <p class="text-red-500 text-xs italic mt-4">
                                            {{ $message }}
                                        </p>
                                    @enderror

                                </div>

                                <div class="md:col-span-5 mt-3 text-right">
                                    <div class="inline-flex items-end">
                                        <button type="submit"
                                            class="flex justify-center items-center bg-blue-500 hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue text-white py-2 px-4 rounded-md transition duration-300 gap-2">
                                            Submit <svg xmlns="http://www.w3.org/2000/svg" width="19"
                                                height="19" viewBox="0 0 24 24" id="send" fill="#fff">
                                                <path fill="none" d="M0 0h24v24H0V0z"></path>
                                                <path
                                                    d="M3.4 20.4l17.45-7.48c.81-.35.81-1.49 0-1.84L3.4 3.6c-.66-.29-1.39.2-1.39.91L2 9.12c0 .5.37.93.87.99L17 12 2.87 13.88c-.5.07-.87.5-.87 1l.01 4.61c0 .71.73 1.2 1.39.91z">
                                                </path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- <script>
        function previewFile() {
            const fileInput = document.getElementById('fileAttachment');
            const filePreview = document.getElementById('filePreview');
            const fileInfo = document.getElementById('filePreview');
            const fileLink = document.getElementById('fileLink')

            if (fileInput.files && fileInput.files[0]) {
                const fileName = fileInput.files[0].name;
                fileInfo.style.display = 'none';
                filePreview.style.display = 'flex';

                fileLink.href = URL.createObjectURL(fileInput.files[0]);
                fileLink.download = fileName;
                fileLink.innerHTML = fileName;
            }
        }
    </script> --}}


</x-form-layout>
