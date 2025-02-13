<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

use App\Models\fruits;

class CTRLfruits extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

    {
        $fruit = fruits::all();
        return view('admin.fruits.fruits')
        ->with('fruit',$fruit);
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

        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:50000', // Image validation
            'fruits' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);

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
            'fruits' => $request->fruits,
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
        $fruit = fruits::find($id);

        return view('admin.fruits.edit')
        ->with('id',$id)
        ->with('fruit',$fruit);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $fruit = fruits::where('id','=',$id)
        ->update([
            'image' => $request->input('image'),
            'fruits' => $request->input('fruit'),
            'desc' => $request->input('desc'),
            
        ]);
        return redirect('/admin/fruits');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        fruits::where('id',$id)
        ->delete();

        return redirect()->back();
    }
}
