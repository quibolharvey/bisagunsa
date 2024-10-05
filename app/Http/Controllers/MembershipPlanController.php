<?php

namespace App\Http\Controllers;

use App\Models\MembershipPlan;
use Illuminate\Http\Request;

class MembershipPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $plans = MembershipPlan::all(); // Fetch all membership plans
        return view('membership-plans.index', compact('plans')); // Return the view with the plans
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('membership-plans.create'); // Load the create form view
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'plan_name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'duration' => 'required|integer',
        ]);

        // Create a new membership plan
        MembershipPlan::create($validatedData);

        // Redirect to the index with a success message
        return redirect()->route('membership-plans.index')->with('success', 'Membership plan created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(MembershipPlan $membershipPlan)
    {
        return view('membership-plans.show', compact('membershipPlan')); // Show membership plan details
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MembershipPlan $membershipPlan)
    {
        return view('membership-plans.edit', compact('membershipPlan')); // Load the edit form view
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MembershipPlan $membershipPlan)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'plan_name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'duration' => 'required|integer',
        ]);

        // Update the membership plan
        $membershipPlan->update($validatedData);

        // Redirect to the index with a success message
        return redirect()->route('membership-plans.index')->with('success', 'Membership plan updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MembershipPlan $membershipPlan)
    {
        $membershipPlan->delete(); // Delete the membership plan

        // Redirect to the index with a success message
        return redirect()->route('membership-plans.index')->with('success', 'Membership plan deleted successfully.');
    }
}
