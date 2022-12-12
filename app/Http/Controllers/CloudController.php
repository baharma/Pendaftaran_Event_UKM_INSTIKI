<?php

namespace App\Http\Controllers;

use App\Cloud;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CloudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            $gcs = Storage::disk('gcs');
            $disk = Storage::disk('gcs')->put($filename, file_get_contents($image));
            $url = $gcs->url('public/Image' . "/" . $$filename . ".jpg");
            $dataarray = array(
                'title' => $request->title,
                'image' => $url,
            );
        }
        Cloud::create($dataarray);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cloud  $cloud
     * @return \Illuminate\Http\Response
     */
    public function show(Cloud $cloud)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cloud  $cloud
     * @return \Illuminate\Http\Response
     */
    public function edit(Cloud $cloud)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cloud  $cloud
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cloud $cloud)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cloud  $cloud
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cloud $cloud)
    {
        //
    }
}
