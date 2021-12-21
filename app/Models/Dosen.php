<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $dosen= 'dosen';

    protected $fillable =[
        'ID_DOSEN',
        'NAMA_DOSEN',
        'ALAMAT_DOSEN',
        'NO_HP_DOSEN',
        'JK_DOSEN',
        'EMAIL_DOSEN'
    ];
}
