<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Matched;
use App\Models\Reactions;

class ReactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reactions = Reactions::all();
        return $reactions;
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
        $reactions = new Reactions;
        $reactions->user1_id = $request->user1_id;
        $reactions->user2_id = $request->user2_id;

        $reactions->save();
        return $reactions;
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
        $reactions = Reactions::findOrFail($id);
        $reactions->user1_id = $request->user1_id;
        $reactions->user2_id = $request->user2_id;

        $reactions->save();
        return $reactions;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Reactions::destroy($id);
        return "Delete Successfully";
    }
}
 