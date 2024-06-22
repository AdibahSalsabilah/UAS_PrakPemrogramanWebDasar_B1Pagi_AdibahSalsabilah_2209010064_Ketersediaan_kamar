<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pasien extends Model
{
    use HasFactory;

    protected $fillable = ['nama','kamar_id','tanggal_masuk','tanggal_keluar'];

    public function kamar()
    {
        return $this->belongsTo(kamar::class);

    }
}
