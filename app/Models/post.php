<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class post extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'judul',
        'tags',
        'deskripsi',
        'waktu',
        'price',
        'lokasi',
        'bg',
        'promo',
        'content',
        'thumnail'
    ];

    protected $dates = ['deleted_at'];
}
