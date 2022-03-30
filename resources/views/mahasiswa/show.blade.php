@extends('mahasiswa.layout')

@section('content')
<div class="container mt-5">
    <a href="/mahasiswa" class="btn btn-success">Kembali</a>
    <h1 class="text-center">Menampilkan 3 mahasiswa</h1>
    <hr>
    <div class="row">
        @foreach ($mahasiswas as $mahasiswa)
        <div class="col-md-4">
            <div class="card" style="height: 15rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $mahasiswa -> nama }}</h5>
                    <p class="card-text"><strong>Kelas</strong> : {{ $mahasiswa -> kelas }}</p>
                    <p class="card-text"><strong>Jurusan</strong> : {{ $mahasiswa -> jurusan }}</p>
                    <p class="card-text"><strong>NIM</strong> : {{ $mahasiswa -> nim }}</p>
                    <a href="{{ route('mahasiswa.show',$mahasiswa->nim) }}"
                        class="btn btn-success d-flex justify-content-center">Detail mahasiswa</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>
@endsection