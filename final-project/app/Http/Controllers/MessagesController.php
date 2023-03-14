<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $messages = Message::all();
        return $messages;
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
        $messages = new Message;
        $messages->sender_id = $request->sender_id;
        $messages->recipient_id = $request->recipient_id;
        $messages->subject = $request->subject;
        $messages->body = $request->body;
        $messages->read = $request->read;
        $messages->is_archived = $request->is_archived;
        $messages->sent_at = $request->sent_at;
        $messages->read_at = $request->read_at;
        $messages->conversation_id = $request->conversation_id;

        $messages->save();
        return $messages;
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
        $messages = Message::findOrFail($id);
        $messages->sender_id = $request->sender_id;
        $messages->recipient_id = $request->recipient_id;
        $messages->subject = $request->subject;
        $messages->body = $request->body;
        $messages->read = $request->read;
        $messages->is_archived = $request->is_archived;
        $messages->sent_at = $request->sent_at;
        $messages->read_at = $request->read_at;
        $messages->conversation_id = $request->conversation_id;

        $messages->save();
        return $messages;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Message::destroy($id);
        return "Delete Successfully";
    }
}
