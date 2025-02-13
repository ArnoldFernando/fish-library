<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

use App\Models\vegetables;

class CTRLvegetable extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vegetable = vegetables::all();
        return view('admin.vegetables.vegetable')
        ->with('vegetable',$vegetable);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
        }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        if ($request->hasFile('images')) {
            // Get the uploaded file
            $image = $request->file('images');
            // Create a unique name for the image
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            // Move the image to the public/images directory
            $image->move(public_path('list_of_vegetables'), $imageName);
        } else {
            $imageName = null; // Set to null if no image is uploaded
        }

        $vegies = vegetables::create([
            'images' => $imageName,
            'vegies' => $request->input('vegies'),
            'descrip' => $request->input('descrip'),
            
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
        $vegies = vegetables::find($id);

        return view('admin.vegetables.edit')
        ->with('id',$id)
        ->with('vegies',$vegies);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $vegies = vegetables::where('id','=',$id)
        ->update([
            'images' => $request->input('images'),
            'vegies' => $request->input('vegies'),
            'desccrip' => $request->input('desc'),
            
        ]);
        return redirect('/admin/fruits');
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        vegetables::where('id',$id)
        ->delete();

        return redirect()->back();
    }
}
