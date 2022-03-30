<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function show()
    {
        return view('mahasiswa.show', [
            'mahasiswas' => Mahasiswa::take(3)->get()
        ]);
    }
}
