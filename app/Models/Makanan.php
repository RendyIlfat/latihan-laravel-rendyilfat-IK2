<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Makanan extends Model
{
    use HasFactory;

    protected $table = 'makanans';

    protected $primaryKey = 'kode_makanan';

    protected $keyType = 'string';

    public $incrementing = false;

    protected $fillable = [
        'kode_makanan',
        'nama',
        'kategori',
        'harga',
        'ket',
    ];

}
