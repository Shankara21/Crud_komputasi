<?php

namespace App\Models;

use App\Models\Mahasiswa;
use App\Models\MataKuliah;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mahasiswa_MataKuliah extends Pivot
{
    use HasFactory;
    protected $table = 'mahasiswa_matakuliah';
    protected $primaryKey = 'id';
    public function mhs_matkul()
    {
        return $this->belongsToMany(Mahasiswa::class, Mahasiswa_MataKuliah::class, 'mahasiswa_id', 'matakuliah_id')->withPivot('nilai');
    }
    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class);
    }
    public function matakuliah()
    {
        return $this->belongsTo(MataKuliah::class);
    }
}
