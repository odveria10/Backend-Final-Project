<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Report;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reports = Report::all();
        return $reports;
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
        $reports = new Report;
        $reports->user_id = $request->user_id;
        $reports->reported_user_id = $request->reported_user_id;
        $reports->reason = $request->reason;

        $reports->save();
        return $reports;
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
        $reports = Report::findOrFail($id);
        $reports->user_id = $request->user_id;
        $reports->reported_user_id = $request->reported_user_id;
        $reports->reason = $request->reason;

        $reports->save();
        return $reports;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Report::destroy($id);
        return "Delete Successfully";
    }
}
