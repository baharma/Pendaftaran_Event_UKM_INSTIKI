<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Post;

class Jadwal extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'title', 'post_id', 'jadwal_mulai',
        'jadwal_berakhir', 'alamat_lokasi',
        'kuota_lokasi', 'tlp'
    ];

    public function post_id()
    {
        return $this->belongsTo(Post::class, 'post_id', 'id');
    }
}
