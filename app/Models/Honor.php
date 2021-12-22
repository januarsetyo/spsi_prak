<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Honor extends Model
{
    protected $table= 'pengajuan_honor';

    protected $fillable =[
      'ID_PENGAJUAN',
      'ID_PETUGAS',
      'ID_SIDANG',
      'ID_PAA',
      'TGL_PENGAJUAN',
      'STATUS_PENGAJUAN',
      'TGL_DISETUJUI',
      'KETERANGAN'
    ];
}
