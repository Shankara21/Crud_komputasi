<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // ! TUGAS MINGGU 7
        // $mahasiswa = $mahasiswa = DB::table('mahasiswas');
        // $post = Mahasiswa::latest();
        // if (request('search')) {
        //     $post->where('nama', 'like', '%' . request('search') . '%');
        // }
        // return view('mahasiswa.index', [
        //     'mahasiswa' => $mahasiswa,
        //     'post' => $post->paginate(6),
        // ]);

        // ! TUGAS MINGGU 8
        $mahasiswa = Mahasiswa::with('kelas')->get();
        $paginate = Mahasiswa::orderBy('id_mahasiswa', 'asc')->paginate(3);
        return view('mahasiswa.index', [
            'mahasiswa' => $mahasiswa,
            'paginate' => $paginate,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = Kelas::all();
        return view('mahasiswa.create', [
            'kelas' => $kelas,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMahasiswaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'kelas_id' => 'required',
            'jurusan' => 'required',
        ]);
        // $mahasiswa = new Mahasiswa;
        // $mahasiswa->nim = $request->get('nim');
        // $mahasiswa->nama = $request->get('nama');
        // $mahasiswa->jurusan = $request->get('jurusan');
        // $mahasiswa->save();

        // $kelas = new Kelas;
        // $kelas->id_kelas = $request->get('kelas');

        // //fungsi eloquent untuk menambah data dengan relasi belongsTo
        // $mahasiswa->kelas()->associate($kelas);
        // $mahasiswa->save();

        Mahasiswa::create($request->all());
        return redirect()->route('mahasiswa.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(Mahasiswa $mahasiswa)
    {
        $Mahasiswa = $mahasiswa;
        return view('mahasiswa.detail', compact('Mahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        $kelas = Kelas::all();
        $Mahasiswa = $mahasiswa;
        return view('mahasiswa.edit', compact('Mahasiswa', 'kelas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMahasiswaRequest  $request
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $validateData = $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'kelas_id' => 'required',
            'jurusan' => 'required',
            // 'email' => 'required',
            // 'alamat' => 'required',
            // 'tgl_lahir' => 'required',
        ]);
        Mahasiswa::where('id_mahasiswa', $mahasiswa->id_mahasiswa)->update($validateData);
        return redirect()->route('mahasiswa.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        Mahasiswa::where('id_mahasiswa', $mahasiswa->id_mahasiswa)->delete();
        return redirect()->route('mahasiswa.index')->with('success', 'Data berhasil dihapus');
    }
}
