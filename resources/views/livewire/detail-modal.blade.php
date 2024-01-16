<div class="p-4">
    <div class="flex justify-between">
        <h5 class="text-lg font-weight-bold">Detail Laporan</h5>
        <button type="button" title="Tutup" wire:click="$emit('closeModal')" class="self-start"><i
                class="cil-x"></i></button>
    </div>
    <hr />
    <div class="px-4 mt-4">
        <div id="data_individu">
            <h5>Informasi Individu</h5>
            <div class="grid grid-cols-2">
                <div>
                    <p class="font-bold mb-0 mt-2">Nama</p>
                    <p>{{ $individual->name }}</p>
                </div>
                <div>
                    <p class="font-bold mb-0 mt-2">NIK</p>
                    <p>{{ str_pad(substr($individual->NIK, 0, 10), 4, '0', STR_PAD_LEFT) . "******"; }}</p>
                </div>
                <div>
                    <p class="font-bold mb-0 mt-2">No Kartu Keluarga</p>
                    <p>{{ str_pad(substr($individual->houseHold->family_card_number, 0, 10), 4, '0', STR_PAD_LEFT) . "******"; }}</p>
                </div>
                <div>
                    <p class="font-bold mb-0 mt-2">Tempat, Tanggal lahir</p>
                    <p>{{ $individual->place_of_birth }}, {{ $individual->date_of_birth }}</p>
                </div>
                <div>
                    <p class="font-bold mb-0 mt-2">Jenis Kelamin</p>
                    <p>{{ $individual->sex }}</p>
                </div>
                <div>
                    <p class="font-bold mb-0 mt-2">Agama</p>
                    <p>{{ $individual->religion }}</p>
                </div>
                <div>
                    <p class="font-bold mb-0 mt-2">Pendidikan</p>
                    <p>{{ $individual->education }}</p>
                </div>
                <div>
                    <p class="font-bold mb-0 mt-2">Pekerjaan</p>
                    <p>{{ $individual->profession }}</p>
                </div>
                <div>
                    <p class="font-bold mb-0 mt-2">Status Kawin</p>
                    <p>{{ $individual->marital_status }}</p>
                </div>
                <div>
                    <p class="font-bold mb-0 mt-2">Kewarganegaraan</p>
                    <p>{{ $individual->citizenship }}</p>
                </div>
            </div>
        </div>
        <div id="data_household">
            <h5>Informasi Tempat tinggal</h5>
            <div class="grid grid-cols-2">
                <div>
                    <p class="font-bold mb-0 mt-2">Alamat</p>
                    <p>{{ $individual->houseHold->address }}</p>
                </div>
                <div>
                    <p class="font-bold mb-0 mt-2">RT, RW</p>
                    <p>{{ $individual->houseHold->RT }}, {{ $individual->houseHold->RW }}</p>
                </div>
                <div>
                    <p class="font-bold mb-0 mt-2">Desa/Kelurahan</p>
                    <p>{{ $individual->houseHold->sub_district }}</p>
                </div>
                <div>
                    <p class="font-bold mb-0 mt-2">Kecamatan</p>
                    <p>{{ $individual->houseHold->district }}</p>
                </div>
                <div>
                    <p class="font-bold mb-0 mt-2">Kabupaten/Kota</p>
                    <p>{{ $individual->houseHold->city }}</p>
                </div>
                <div>
                    <p class="font-bold mb-0 mt-2">Provinsi</p>
                    <p>{{ $individual->houseHold->province }}</p>
                </div>
                <div>
                    <p class="font-bold mb-0 mt-2">Kode Pos</p>
                    <p>{{ $individual->houseHold->postal_code }}</p>
                </div>
            </div>
        </div>
        <div id="data_housecondition">
            <h5>Informasi Kondisi Tempat Tinggal</h5>
            <div class="grid grid-cols-2">
                <div>
                    <p class="font-bold mb-0 mt-2">Luas Rumah</p>
                    <p>{{ $individual->houseHold->houseCondition->luas_rumah }} m^2</p>
                </div>
                <div>
                    <p class="font-bold mb-0 mt-2">Jenis Lantai</p>
                    <p>{{ $individual->houseHold->houseCondition->jenis_lantai }}</p>
                </div>
                <div>
                    <p class="font-bold mb-0 mt-2">Jenis Dinding</p>
                    <p>{{ $individual->houseHold->houseCondition->jenis_dinding }}</p>
                </div>
                <div>
                    <p class="font-bold mb-0 mt-2">Jenis Atap</p>
                    <p>{{ $individual->houseHold->houseCondition->kondisi_atap }}</p>
                </div>
                <div>
                    <p class="font-bold mb-0 mt-2">Sumber Air</p>
                    <p>{{ $individual->houseHold->houseCondition->sumber_air }}</p>
                </div>
                <div>
                    <p class="font-bold mb-0 mt-2">Sumber Listrik</p>
                    <p>{{ $individual->houseHold->houseCondition->sumber_listrik }}</p>
                </div>
                <div>
                    <p class="font-bold mb-0 mt-2">Fasilitas Buang Air</p>
                    <p>{{ $individual->houseHold->houseCondition->fasilitas_buang_air }}</p>
                </div>
                <div>
                    <p class="font-bold mb-0 mt-2">Akses Jalan</p>
                    <p>{{ $individual->houseHold->houseCondition->akses_jalan }}</p>
                </div>
                <div>
                    <p class="font-bold mb-0 mt-2">Jarang ke Pusat Kota</p>
                    <p>{{ $individual->houseHold->houseCondition->jarak_ke_pusat_kota }} KM</p>
                </div>
                <div>
                    <p class="font-bold mb-0 mt-2">Jarang ke Sekolah Terdekat</p>
                    <p>{{ $individual->houseHold->houseCondition->jarak_ke_sekolah_terdekat }} KM</p>
                </div>
                <div>
                    <p class="font-bold mb-0 mt-2">Jarang ke Puskesmas Terdekat</p>
                    <p>{{ $individual->houseHold->houseCondition->jarak_ke_puskesmas_terdekat }} KM</p>
                </div>
            </div>
        </div>
    </div>
</div>
