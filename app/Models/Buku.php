<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $table = 'buku';

    protected $fillable = [
        'judul',
        'tahun_terbit',
        'pengarang',
        'kategori',
        'rating_buku',
        'cover_image',
        'pdf_file',
        'kategori_buku_id',
    ];

    public function kategori()
    {
        return $this->belongsTo(KategoriBuku::class, 'kategori_buku_id');
    }
        public function ratings()
    {
        return $this->hasMany(Rating::class);
    }

    public function averageRating()
    {
        return $this->ratings()->avg('rating');
}
}