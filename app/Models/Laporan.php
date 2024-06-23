<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;

    protected $table = 'laporans';

    protected $fillable = [
        'nama',
        'email',
        'nohp',
        'lokasi',
        'jenis',
        'deskripsi',
        'bukti',
        'user_id',
    ];

    // Definisikan relasi dengan model User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Accessor untuk nama
    public function getNamaAttribute($value)
    {
        return ucfirst($value);
    }

    // Mutator untuk nama
    public function setNamaAttribute($value)
    {
        $this->attributes['nama'] = strtolower($value);
    }
}
