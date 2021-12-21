<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokumen extends Model
{
    protected $jadwal= 'sidang';

    protected $fillable =[
        'ID_SIDANG',
        'ID_DOSEN',
        'NIM',
        'JADWAL_SIDANG'

    ];
}
