<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Jadwal;
use App\List_ukm;

class Post extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'title_post', 'slug', 'description',
        'image', 'user_post', 'id_ukm'
    ];
    protected $hidden = [];

    public function ukm_list()
    {
        return $this->belongsTo(List_ukm::class, 'id_ukm', 'id');
    }

    public function jadwal_id()
    {
        return $this->hasMany(Jadwal::class, 'post_id', 'id');
    }
}
