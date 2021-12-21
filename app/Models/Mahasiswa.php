<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{

    use HasFactory;

    protected $mhs= 'mahasiswa';

    protected $fillable =[
        'NIM',
        'NAMA_MAHASISWA',
        'ALAMAT_MAHASISWA',
        'NO_HP_MAHASISWA',
        'JK_MAHASISWA',
        'EMAIL_MAHASISWA'
    ];

}
