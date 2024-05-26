<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    protected $table="pegawai";
    protected $primaryKey="id";
    protected $fillable=[
        "nama","alamat","tanggal_lahir" ,"jenis_kelamin", "tanggal_masuk ","jabatan_id" ,"departemen_id" 	
    ];
}
