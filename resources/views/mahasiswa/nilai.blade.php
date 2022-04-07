@extends('mahasiswa.layout')

@section('content')
<div class="col-lg-12 margin-tb mb-5">
    <a href="/mahasiswa" style="text-decoration: none;color:black">
        <div class="pull-left mt-2">
            <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
        </div>
    </a>
</div>
<h1 class="text-center">KARTU HASIL STUDI (KHS)</h1>
<div class="bio mt-5 mb-4">
    <p><strong>Nama : </strong> {{ $mhs -> nama }}</p>
    <p><strong>NIM : </strong> {{ $mhs-> nim }}</p>
    <p><strong>Kelas : </strong> {{$mhs -> kelas -> nama_kelas }}</p>
</div>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Mata Kuliah</th>
            <th scope="col">SKS</th>
            <th scope="col">Semester</th>
            <th scope="col">Nilai</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tes as $item)
        <tr>
            <th scope="row">{{ $item -> matakuliah -> nama_matkul }}</th>
            <td>{{ $item -> matakuliah -> sks }}</td>
            <td>{{ $item -> matakuliah -> semester }}</td>
            <td>{{ $item -> nilai }}</td>
        </tr>
        @endforeach


    </tbody>
</table>
@endsection