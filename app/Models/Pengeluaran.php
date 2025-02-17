<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengeluaran extends Model
{
    protected $table = 'pengeluaran';
    protected $fillable = [
        'deskripsi',
        'nominal',
    ];
    protected $primaryKey = 'id_pengeluaran';
    use HasFactory;
}
