<?php

namespace App\Models;

use App\Models\Kelas;
use App\Models\MataKuliah;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $guarded = ['id_mahasiswa'];
    protected $primaryKey = 'id_mahasiswa';

    public function getRouteKeyName()
    {
        return 'nim';
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
    public function matakuliah()
    {
        return $this->belongsToMany(MataKuliah::class, 'mahasiswa_matakuliah', 'mahasiswa_id', 'matakuliah_id')->withPivot('nilai');
    }
}
