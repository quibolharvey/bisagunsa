<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trainers = Trainer::all(); // Fetch all trainers
        return view('trainers.index', compact('trainers')); // Return the view with the trainers
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('trainers.create'); // Load the create form view
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:trainers,email',
            'phone' => 'required|string|max:15',
            'specialization' => 'required|string|max:255',
        ]);

        // Create a new trainer
        Trainer::create($validatedData);

        // Redirect to the index with a success message
        return redirect()->route('trainers.index')->with('success', 'Trainer created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Trainer $trainer)
    {
        return view('trainers.show', compact('trainer')); // Show trainer details
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Trainer $trainer)
    {
        return view('trainers.edit', compact('trainer')); // Load the edit form view
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Trainer $trainer)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:trainers,email,' . $trainer->id,
            'phone' => 'required|string|max:15',
            'specialization' => 'required|string|max:255',
        ]);

        // Update the trainer
        $trainer->update($validatedData);

        // Redirect to the index with a success message
        return redirect()->route('trainers.index')->with('success', 'Trainer updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Trainer $trainer)
    {
        $trainer->delete(); // Delete the trainer

        // Redirect to the index with a success message
        return redirect()->route('trainers.index')->with('success', 'Trainer deleted successfully.');
    }
}
