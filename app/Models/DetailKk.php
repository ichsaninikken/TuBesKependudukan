<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailKk extends Model
{
    use HasFactory;
    protected $table = "detail_kartu_keluargas";
    protected $fillable = [
        'kartukeluarga_id',
        'penduduk_id',
        'hubungan',
    ];

    public function kartu_keluargas(){
        return $this->BelongsTo(KartuKeluarga::class, 'kartukeluarga_id');
    }

    public function penduduks(){
        return $this->BelongsTo(Penduduk::class, 'penduduk_id');
    }
}
