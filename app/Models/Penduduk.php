<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Penduduk extends Model
{
    use HasFactory;
    protected $fillable = [
        'kewarganegaraan',
        'nik',
        'nama',
        'tempat_lahir',
        'jenis_kelamin',
        'rt',
        'rw',
        'kelurahan',
        'kecamatan',
        'agama',
        'status',
        'status_keadaan',
        'pekerjaan',
        'tanggal_lahir',
    ];

    public function kartu_keluargas(){
        return $this->hasOne(KartuKeluarga::class);
    }

    public function kelahirans(){
        return $this->hasMany(Kelahiran::class);
    }

    public function kematians(){
        return $this->hasOne(Kematian::class);
    }

    public function detail_kartu_keluargas(){
        return $this->hasOne(DeatilKartuKeluarga::class);
    }
}
