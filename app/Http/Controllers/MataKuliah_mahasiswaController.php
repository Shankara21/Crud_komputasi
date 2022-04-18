<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa_MataKuliah;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use PDF;

class MataKuliah_mahasiswaController extends Controller
{
    public function index(Mahasiswa $mahasiswa)
    {

        // $mahasiswa_matakuliah = Mahasiswa_MataKuliah::where('mahasiswa_id', $mahasiswa->id_mahasiswa)->get();

        // return view('mahasiswa.nilai', [
        //     'mhs' => $mahasiswa,
        //     'tes' => $mahasiswa_matakuliah,
        // ]);
        $Mahasiswa = Mahasiswa::where('nim', $mahasiswa->nim)->first();
        return view('mahasiswa.nilai', [
            'mhs' => $Mahasiswa,
        ]);
    }
    public function pdf(Mahasiswa $mahasiswa)
    {
        $mhs = $mahasiswa;
        $pdf = PDF::loadview('mahasiswa.export', compact('mhs'));
        return $pdf->stream();
    }
}
