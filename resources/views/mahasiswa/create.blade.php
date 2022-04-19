@extends('mahasiswa.layout')
@section('content')
<div class="container mt-3">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">Tambah Mahasiswa
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="{{ route('mahasiswa.store') }}" id="myForm" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="Nim">Nim</label>
                        <input type="text" name="nim" class="form-control" id="Nim" aria-describedby="Nim">
                    </div>
                    <div class="form-group">
                        <label for="Nama">Nama</label>
                        <input type="Nama" name="nama" class="form-control" id="Nama" ariadescribedby="Nama">
                    </div>
                    <div class="form-group">
                        <label for="Kelas">Kelas</label>
                        <select name="kelas_id" class="form-control">
                            @foreach ($kelas as $kelas)
                            <option value="{{ $kelas->id }}">{{ $kelas->nama_kelas }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Jurusan">Jurusan</label>
                        <input type="Jurusan" name="jurusan" class="form-control" id="Jurusan"
                            ariadescribedby="Jurusan">
                    </div>
                    <div class="form-group">
                        <label for="Jurusan">Foto</label>
                        <input type="file" name="foto" class="form-control" id="Jurusan" ariadescribedby="Jurusan">
                    </div>
                    {{-- <div class="form-group">
                        <label for="Jurusan">Email</label>
                        <input type="Jurusan" name="email" class="form-control" id="Jurusan" ariadescribedby="Jurusan">
                    </div>
                    <div class="form-group">
                        <label for="Jurusan">Alamat</label>
                        <input type="Jurusan" name="alamat" class="form-control" id="Jurusan" ariadescribedby="Jurusan">
                    </div>
                    <div class="form-group">
                        <label for="Jurusan">Tanggal lahir</label>
                        <input type="date" name="tgl_lahir" class="form-control" id="Jurusan" ariadescribedby="Jurusan">
                    </div> --}}
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection