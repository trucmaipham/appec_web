<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loaiHTDanhGia extends Model
{
    use HasFactory;
    protected $table='loai_ht_danhgia';
    public $fillable=['maLoaiHTDG','tenLoaiHTDG','isDelete'];
}
