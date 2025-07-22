<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Karyawans extends Model
{
    protected $fillable = [
        'nama',
        'email',
        'key',
    ];

    public function setKeyAttribute($value)
    {
        $this->attributes['key'] = bcrypt($value);
    }

    public function gajis()
    {
        return $this->hasMany(Gajis::class, 'karyawan_id');
    }
}
