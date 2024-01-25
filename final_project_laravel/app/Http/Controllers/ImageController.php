<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    //
    public function showForm()
    {
        return view('upload');
    }

    public function upload(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();

        $request->image->storeAs('public/images/imageafter', $imageName);

        return back()->with('success', 'Image uploaded successfully.');
    }
    public function upload2(Request $request)
    {
        $request->validate([
            'image2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image2->extension();

        $request->image2->storeAs('public/images/imagebefor', $imageName);

        return back()->with('success', 'Image uploaded successfully.');
    }
}


