<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserActivities;

class UserActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userActivities = UserActivities::all();
        return $userActivities;
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
        $userActivities = new UserActivities;
        $userActivities->user_id = $request->user_id;
        $userActivities->activity_type = $request->activity_type;
        $userActivities->description = $request->description;

        $userActivities->save();
        return $userActivities;
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
        $userActivities = UserActivities::findOrFail($id);
        $userActivities->user_id = $request->user_id;
        $userActivities->activity_type = $request->activity_type;
        $userActivities->description = $request->description;

        $userActivities->save();
        return $userActivities;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        userActivities::destroy($id);
        return "Delete Succesfully";
    }
}
