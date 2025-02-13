<?php

namespace App\Http\Controllers\Admin\Agricultural;

use App\Http\Controllers\Controller;
use App\Models\Equipment;
use Illuminate\Http\Request;

class EquipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $farmers = Equipment::all();
        return view('admin.agricultural.equipments.index', compact('farmers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.agricultural.equipments.create');
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
            $image->move(public_path('list_of_equipment'), $imageName);
        } else {
            $imageName = null; // Set to null if no image is uploaded
        }

        // Create a new barangay
        Equipment::create([
            'image' => $imageName,
            'name' => $request->name,
            'description' => $request->description,
            'type' => 'agricultural'
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
