<?php

namespace App\Http\Controllers;

use App\Models\Individual;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function success()
    {
        return view('success');
    }

    public function submit(Request $request)
    {
        $this->validate($request, [
            'nik' => 'required|unique:individuals,NIK',
            'no_kk' => 'required|unique:house_holds,family_card_number',
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'pendidikan' => 'required',
            'pekerjaan' => 'required',
            'status_perkawinan' => 'required',
            'warga_negara' => 'required',
            'alamat' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'kelurahan' => 'required',
            'kecamatan' => 'required',
            'kota' => 'required',
            'provinsi' => 'required',
            'zipcode' => 'required',
            'luas_rumah' => 'required',
            'jenis_lantai' => 'required',
            'jenis_dinding' => 'required',
            'jenis_atap' => 'required',
            'sumber_air' => 'required',
            'sumber_listrik' => 'required',
            'fasilitas_buang_air' => 'required',
            'akses_jalan' => 'required',
            'jarak_ke_pusat_kota' => 'required',
            'jarak_ke_puskesmas' => 'required',
            'jarak_ke_sekolah' => 'required',
        ]);

        //Create Individual Data
        $individual = Individual::create([
            'NIK' => $request->nik,
            'name' => $request->nama,
            'place_of_birth' => $request->tempat_lahir,
            'date_of_birth' => $request->tanggal_lahir,
            'sex' => $request->jenis_kelamin,
            'religion' => $request->agama,
            'education' => $request->pendidikan,
            'profession' => $request->pekerjaan,
            'marital_status' => $request->status_perkawinan,
            'citizenship' => $request->warga_negara,
        ]);

        //Create household data
        $household = $individual->household()->create([
            'family_card_number' => $request->no_kk,
            'address' => $request->alamat,
            'RT' => $request->rt,
            'RW' => $request->rw,
            'sub_district' => $request->kelurahan,
            'district' => $request->kecamatan,
            'city' => $request->kota,
            'province' => $request->provinsi,
            'postal_code' => $request->zipcode
        ]);

        //Create house condition data
        $household->houseCondition()->create([
            'luas_rumah' => $request->luas_rumah,
            'jenis_lantai' => $request->jenis_lantai,
            'jenis_dinding' => $request->jenis_dinding,
            'kondisi_atap' => $request->jenis_atap,
            'sumber_air' => $request->sumber_air,
            'sumber_listrik' => $request->sumber_listrik,
            'fasilitas_buang_air' => $request->fasilitas_buang_air,
            'akses_jalan' => $request->akses_jalan,
            'jarak_ke_pusat_kota' => $request->jarak_ke_pusat_kota,
            'jarak_ke_puskesmas_terdekat' => $request->jarak_ke_puskesmas,
            'jarak_ke_sekolah_terdekat' => $request->jarak_ke_sekolah
        ]);

        return redirect()->route('form.success')->with('success', 'Data berhasil disimpan');
    }
}
