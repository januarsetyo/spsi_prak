<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokumen extends Model
{
    protected $doc= 'dokumen';

    protected $fillable =[
      'ID_DOKUMEN',
      'NIM',
      'NAMA_DOKUMEN'

    ];
}
