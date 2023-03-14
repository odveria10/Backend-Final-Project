<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dislike;

class DislikeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dislikes = Dislike::all();
        return $dislikes;
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
        $dislikes = new Dislike;
        $dislikes->user_id = $request->user_id;
        $dislikes->disliked_user_id = $request->disliked_user_id;

        $dislikes->save();
        return $dislikes;
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
        $dislikes = Dislike::findOrFail($id);
        $dislikes->user_id = $request->user_id;
        $dislikes->disliked_user_id = $request->disliked_user_id;

        $dislikes->save();
        return $dislikes;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Dislike::destroy($id);
        return "Delete Successfully";
    }
}
