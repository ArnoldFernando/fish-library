<?php

namespace App\Http\Controllers\Admin\Aquatic;

use App\Http\Controllers\Controller;
use App\Models\Fisheries;
use Illuminate\Http\Request;

class FisheriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fish = Fisheries::all();
        return view('admin.aquatic.fisheries.index', compact('fish'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.aquatic.fisheries.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:50000', // Image validation
        //     'farmers' => 'required|string|max:255',
        //     'description' => 'required|string|max:255',
        // ]);

        if ($request->hasFile('image')) {
            // Get the uploaded file
            $image = $request->file('image');
            // Create a unique name for the image
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            // Move the image to the public/images directory
            $image->move(public_path('list_of_fish'), $imageName);
        } else {
            $imageName = null; // Set to null if no image is uploaded
        }

        // Create a new barangay
        Fisheries::create([
            'image' => $imageName,
            'name' => $request->name,
            'description' => $request->description,
            'harvest' => $request->harvest,
            'type' => $request->type,
        ]);

        return redirect()->back()->with('success', 'saved successfully');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
