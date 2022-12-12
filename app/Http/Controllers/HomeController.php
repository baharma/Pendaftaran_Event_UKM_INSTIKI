<?php

namespace App\Http\Controllers;

use App\Post;
use App\Thumnail;
use Illuminate\Http\Request;

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
    public function show($id)
    {
        //
    }
}
