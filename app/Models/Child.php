<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    use CrudTrait;
    use HasFactory;
    protected $fillable = [
        'nama_anak',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'foto',
        'akte_lahir',
        'imunisasi_lengkap',
        'nama_ayah',
        'kerja_ayah',
        'hp_ayah',
        'email_ayah',
        'nama_ibu',
        'kerja_ibu',
        'hp_ibu',
        'email_ibu',
        'ktp_ayah',
        'ktp_ibu',
        'foto_kopi_kartu_keluarga',
    ];
}
