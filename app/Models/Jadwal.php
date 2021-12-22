<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table= 'sidang';

    protected $fillable =[
        'ID_SIDANG',
        'ID_DOSEN',
        'NIM',
        'JADWAL_SIDANG'
    ];
}
