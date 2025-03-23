<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $fillable = [];

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class);
    }

    public function unit_kerja()
    {
        return $this->belongsTo(UnitKerja::class);
    }
}
