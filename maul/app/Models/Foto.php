<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    use HasFactory;
    protected $table = 'foto';
    protected $primaryKey = 'idfoto';
    protected $fillable = [
        'judulfoto',
        'deskripsi',
        'tanggal_upload',
        'lokasi_file',
    ];
}
