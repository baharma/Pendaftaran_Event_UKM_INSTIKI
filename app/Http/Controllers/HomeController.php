<?php

namespace App\Http\Controllers;

use App\Post;
use App\Thumnail;
use Illuminate\Http\Request;
use App\Jadwal;

class HomeController extends Controller
{
    public function index()
    {
        $items = Thumnail::orderBy('created_at', 'desc')->paginate('5');
        return view(
            'frontend.layout.home',
            ['items' => $items]
        );
    }
    public function show($slug)
    {
        $items = Post::with(['ukm_list'])
            ->where('slug', $slug)
            ->first();

        $jadwal = $items->id;
        $data = Jadwal::findorfail($jadwal);

        return view(
            'frontend.layout.detail',
            compact('data', 'items')
        );
    }
}
