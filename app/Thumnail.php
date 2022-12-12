<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Post;

class Thumnail extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'title', 'description', 'id_post', 'date', 'image'
    ];

    protected $hidden = [];

    public function postID()
    {
        return $this->belongsTo(Post::class, 'id_post', 'id');
    }
}
