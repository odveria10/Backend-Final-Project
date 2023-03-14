<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Settings;
class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $settings = Settings::all();
        return $settings;
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
        $settings = new Settings;
        $settings->user_id = $request->user_id;
        $settings->show_my_gender = $request->show_my_gender;
        $settings->show_my_bio = $request->show_my_bio;
        $settings->allow_notifications = $request->allow_notifications;
        $settings->location_preference = $request->location_preference;
        $settings->allow_profile_visibility = $request->allow_profile_visibility;
        $settings->minimum_age_preference = $request->minimum_age_preference;
        $settings->maximum_age_preference = $request->maximum_age_preference;
        $settings->allow_account_deletion = $request->allow_account_deletion;

        $settings->save();
        return $settings;
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
        $settings = Settings::findOrFail($id);
        $settings->user_id = $request->user_id;
        $settings->show_my_gender = $request->show_my_gender;
        $settings->show_my_bio = $request->show_my_bio;
        $settings->allow_notifications = $request->allow_notifications;
        $settings->location_preference = $request->location_preference;
        $settings->allow_profile_visibility = $request->allow_profile_visibility;
        $settings->minimum_age_preference = $request->minimum_age_preference;
        $settings->maximum_age_preference = $request->maximum_age_preference;
        $settings->allow_account_deletion = $request->allow_account_deletion;

        $settings->save();
        return $settings;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Settings::destroy($id);
        return "Delete Successfully";
    }
}
