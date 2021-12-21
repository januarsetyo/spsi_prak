<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PAA extends Model
{
    protected $paa= 'paa';

    protected $fillable =[
        'ID_PAA',
        'NAMA_PAA',
        'NO_HP_PAA',
        'JK_PAA',
        'EMAIL_PAA'
    ];
}
