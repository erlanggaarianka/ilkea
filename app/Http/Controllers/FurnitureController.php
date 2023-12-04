<?php

namespace App\Http\Controllers;

use App\Models\Furniture;
use Illuminate\Http\Request;

class FurnitureController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'type' => 'required|in:chair,table,door,misc',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Handle image upload
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('furniture_images', 'public');
        }

        // Create a new furniture item
        Furniture::create([
            'name' => $validatedData['name'],
            'description' => $validatedData['description'],
            'price' => $validatedData['price'],
            'type' => $validatedData['type'],
            'image' => $imagePath,
        ]);

        return redirect()->route('home')->with('success', 'Furniture added successfully.');
    }

    public function destroy($id)
    {
        $furniture = Furniture::findOrFail($id);
        $furniture->delete();

        return redirect()->route('home')->with('success', 'Furniture deleted successfully.');
    }
}
