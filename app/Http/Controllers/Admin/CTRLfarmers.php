<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

use App\Models\farmers;


class CTRLfarmers extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {       
         $farmers = farmers::all();
        return view('admin.farmers.farmers')
        ->with('farmers',$farmers);
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
        farmers::create([
            'image' => $imageName,
            'farmers' => $request->farmers,
            'description' => $request->description,
           // Save the image file name or null
        ]);

        return redirect()->back();
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
       return view('admin.farmers.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
    }
}
