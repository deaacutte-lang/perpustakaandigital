<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    
    protected $table = 'bukus';

    protected $fillable = [
        'id_buku', 
        'judul_buku', // Sesuaikan sama input di form & kolom database
        'pengarang', 
        'penerbit', 
        'tahun',
        'gambar' // Kalau nanti mau pake fitur upload foto sampul
    ];
}