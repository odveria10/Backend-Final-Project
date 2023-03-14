<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Photo;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $photos = Photo::all();
        return $photos;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
 
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $photos = new Photo;
        $photos->user_id = $request->user_id;
        $photos->filename = $request->filename;
        $photos->path = $request->path;

        $photos->save();
        return $photos;

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $photos = Photo::findOrFail($id);
        $photos->user_id = $request->user_id;
        $photos->filename = $request->filename;
        $photos->path = $request->path;

        $photos->save();
        return $photos;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Photo::destroy($id);
        return "Delete Successfully";
    }
}
