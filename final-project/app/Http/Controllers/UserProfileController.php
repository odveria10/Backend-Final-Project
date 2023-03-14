<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserProfiles;

class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user_profiles = UserProfiles::all();
        return $user_profiles;
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
        $user_profiles = new UserProfiles;
        $user_profiles->user_id = $request->user_id;
        $user_profiles->first_name = $request->first_name;
        $user_profiles->last_name = $request->last_name;
        $user_profiles->interests = $request->interests;
        $user_profiles->bio = $request->bio;
        $user_profiles->gender = $request->gender;
        $user_profiles->age = $request->age;
        $user_profiles->save();

        return $user_profiles;
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
        $user_profiles = UserProfiles::findOrFail($id);
        $user_profiles->user_id = $request->user_id;
        $user_profiles->first_name = $request->first_name;
        $user_profiles->last_name = $request->last_name;
        $user_profiles->interests = $request->interests;
        $user_profiles->bio = $request->bio;
        $user_profiles->gender = $request->gender;
        $user_profiles->age = $request->age;

            $user_profiles->save();
            return $user_profiles;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        UserProfiles::destroy($id);
        return "Delete Successfully";
    }
}
