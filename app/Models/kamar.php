<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kamar extends Model
{
    use HasFactory;

    protected $fillable = ['nomor_kamar','level','status'];

    public function pasien()
{
    return $this->hasOne(pasien::class);

  }
}
