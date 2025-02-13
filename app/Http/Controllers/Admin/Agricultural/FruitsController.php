<?php

namespace App\Http\Controllers\Admin\Agricultural;

use App\Http\Controllers\Controller;
use App\Models\Fruits;
use Illuminate\Http\Request;

class FruitsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fruit = Fruits::all();
        return view('admin.agricultural.fruits.index', compact('fruit'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.agricultural.fruits.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // $request->validate([
        //     'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:50000', // Image validation
        //     'fruits' => 'required|string|max:255',
        //     'description' => 'required|string|max:255',
        // ]);

        if ($request->hasFile('image')) {
            // Get the uploaded file
            $image = $request->file('image');
            // Create a unique name for the image
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            // Move the image to the public/images directory
            $image->move(public_path('list_of_fruits'), $imageName);
        } else {
            $imageName = null; // Set to null if no image is uploaded
        }

        // Create a new barangay
        fruits::create([
            'image' => $imageName,
            'name' => $request->name,
            'duration' => $request->duration,
            'description' => $request->description,
           // Save the image file name or null
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
