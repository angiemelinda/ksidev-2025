<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gajis extends Model
{
    protected $fillable = [
        'karyawan_id',
        'jumlah',
        'periode',
    ];

    public function karyawan()
    {
        return $this->belongsTo(Karyawans::class, 'karyawan_id');
    }
}
