<?php

namespace App\Http\Controllers;

use App\Post;
use App\Thumnail;
use Illuminate\Http\Request;

class ThumnailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Thumnail::with('postID')->paginate('5');
        return view(
            'backend.inlclude.thumnail.index',
            ['items' => $items]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = Post::all();
        return view(
            'backend.inlclude.thumnail.create',
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

            $dataarray = $request->all();

            $dataarray['image'] = $filename;
            Thumnail::create($dataarray);
            return redirect()->route('thumnail.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Thumnail  $thumnail
     * @return \Illuminate\Http\Response
     */
    public function show(Thumnail $thumnail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Thumnail  $thumnail
     * @return \Illuminate\Http\Response
     */
    public function edit(Thumnail $thumnail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Thumnail  $thumnail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Thumnail $thumnail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Thumnail  $thumnail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Thumnail $thumnail)
    {
        $items = Thumnail::find($thumnail->id);
        unlink("public/Image" . $items->image_ukm);
        Thumnail::where("id", $items->id)->delete();
        return redirect()->back();
    }
}
