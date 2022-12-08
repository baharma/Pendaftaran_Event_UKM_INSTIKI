<?php

namespace App\Http\Controllers;

use App\Post;
use App\Jadwal;
use App\List_ukm;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Post::with(['ukm_list'])->paginate('10');
        return view('backend.inlclude.post.index', ['items' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = List_ukm::all();
        return view(
            'backend.inlclude.post.create',
            ['items' => $items]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->file('image')) {
            $image = $request->file('image');
            $filename = date('YmdHi') . $image->getClientOriginalName();
            $image->move(public_path('public/Image'), $filename);

            $postarray = new Post;
            $postarray->title_post = $request->title_post;
            $postarray->slug = $request->title_post;
            $postarray->description = $request->description;
            $postarray->image = $filename;
            $postarray->user_post = 'ADMIN';
            $postarray->id_ukm = $request->id_ukm;

            $postarray->save();
        }

        $jadwalArray = array(
            'title' => $request->title_post,
            'post_id' => $postarray->id,
            'jadwal_mulai' => $request->jadwal_mulai,
            'jadwal_berakhir' => $request->jadwal_berakhir,
            'alamat_lokasi' => $request->alamat_lokasi,
            'kuota_lokasi' => $request->kuota_lokasi,
            'tlp' => $request->tlp
        );
        Jadwal::create($jadwalArray);
        return redirect()->route('postevent.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
