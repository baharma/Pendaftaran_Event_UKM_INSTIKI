<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class List_ukm extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'nama_ukm', 'anggota', 'ketua', 'image_ukm'
    ];
    protected $hidden = [];
}
