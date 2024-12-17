<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pohon extends Model
{
    use HasFactory;

    protected $table = 'pohonku';
    protected $primaryKey = 'id_Pohon';
    protected $fillable = ['nama_pohon', 'jenis_pohon', 'tanggal_tanam', 'Lokasi', 'user_id', 'image'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
