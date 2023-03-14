<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Like;

class LikeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $likes = Like::all();
        return $likes;
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
        $likes = new Like;
        $likes->user_id = $request->user_id;
        $likes->liked_user_id = $request->liked_user_id;
        $likes->like_type = $request->like_type;
        $likes->is_mutual = $request->is_mutual;
     

        $likes->save();
        return $likes;
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
        $likes = Like::findOrFail($id);
        $likes->user_id = $request->user_id;
        $likes->liked_user_id = $request->liked_user_id;
        $likes->like_type = $request->like_type;
        $likes->is_mutual = $request->is_mutual;


        $likes->save();
        return $likes;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Like::destroy($id);
        return "Delete Successfully";
    }
}
