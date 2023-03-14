<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chat;

class ChatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $chats = Chat::all();
        return $chats;
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
        $chats = new Chat;
        $chats->user1_id = $request->user1_id;
        $chats->user2_id = $request->user2_id;
        $chats->messages = $request->messages;

        $chats->save();
        return $chats;
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
        $chats = Chat::findOrFail($id);
        $chats->user1_id = $request->user1_id;
        $chats->user2_id = $request->user2_id;
        $chats->messages = $request->messages;

        $chats->save();
        return $chats;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Chat::destroy($id);
        return "Delete Successfully";
    }
}
