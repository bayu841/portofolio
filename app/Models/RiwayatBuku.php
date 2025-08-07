<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatBuku extends Model
{
    use HasFactory;
    protected $casts = [
        'viewed_at' => 'datetime',
    ];
    protected $table = "riwayat_buku";
    protected $fillable = ['user_id','buku_id','viewed_at'];

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function buku(){
        return $this->belongsTo(Buku::class,'buku_id');
    }
}