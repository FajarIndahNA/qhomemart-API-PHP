<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersegiPanjang extends Model
{
    use HasFactory;
    protected $fillable = ['panjang', 'lebar'];

    protected $table = 'persegi_panjang';
}
