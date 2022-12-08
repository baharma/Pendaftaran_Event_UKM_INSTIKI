<?php

namespace App\Http\Controllers;

use App\List_ukm;
use Illuminate\Http\Request;
use File;

class ListUkmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = List_ukm::orderBy('created_at', 'desc')->paginate('5');
        return view(
            'backend.inlclude.ukm_list.index',
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
        return view('backend.inlclude.ukm_list.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->file('image_ukm')) {
            $image = $request->file('image_ukm');
            $filename = date('YmdHi') . $image->getClientOriginalName();
            $image->move(public_path('public/Image'), $filename);

            $dataarray = array(
                'nama_ukm' => $request->nama_ukm,
                'anggota' => $request->anggota,
                'ketua' => $request->ketua,
                'image_ukm' => $filename
            );
            List_ukm::create($dataarray);
        }
        return redirect()->route('ukmlist.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\List_ukm  $list_ukm
     * @return \Illuminate\Http\Response
     */
    public function show(List_ukm $list_ukm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\List_ukm  $list_ukm
     * @return \Illuminate\Http\Response
     */
    public function edit(List_ukm $list_ukm, $id)
    {
        $item = List_ukm::find($id);
        return view(
            'backend.inlclude.ukm_list.edit',
            ['item' => $item]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\List_ukm  $list_ukm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, List_ukm $list_ukm, $id)
    {
        if ($request->file('image_ukm')) {
            $image = $request->file('image_ukm');
            $gallery = List_ukm::find($id);
            $path = 'public/Image/' . $gallery->image;
            if (File::exists($path)) {
                File::delete($path);
            }
            $path = date('YmdHi') . $image->getClientOriginalName();
            $image->move(public_path('public/Image'), $path);
            $dataarray = array(
                'nama_ukm' => $request->nama_ukm,
                'anggota' => $request->anggota,
                'ketua' => $request->ketua,
                'image_ukm' => $path
            );
        } else {
            $dataarray = array(
                'nama_ukm' => $request->nama_ukm,
                'anggota' => $request->anggota,
                'ketua' => $request->ketua,
            );
        }
        List_ukm::whereId($id)->update($dataarray);
        return redirect()->route('ukmlist.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\List_ukm  $list_ukm
     * @return \Illuminate\Http\Response
     */
    public function destroy(List_ukm $list_ukm, $id)
    {
        $items = List_ukm::find($id);
        unlink("public/Image/" . $items->image_ukm);
        List_ukm::where("id", $items->id)->delete();
        return redirect()->route('ukmlist.index');
    }
}
