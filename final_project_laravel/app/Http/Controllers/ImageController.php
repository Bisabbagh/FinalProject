<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo; // Import the Photo model
use Illuminate\Support\Facades\Auth; // Import the Auth facade
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
            'image2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $imageName = time().'.'.$request->image->extension();
        $imageName2 = time().'.'.$request->image2->extension();

        $request->image->storeAs('public/images/imageafter', $imageName);
        $request->image2->storeAs('public/images/imagebefor', $imageName2);

        $photo = new Photo;
        $photo->photo_after = $imageName;
        $photo->photo_before = $imageName2;
        $photo->user_id = auth()->user()->id; // Assuming you are using authentication
        $photo->save();

        return back()->with('success', 'Image uploaded successfully.');
    }
    /*public function upload2(Request $request)
    {
        $request->validate([
            'image2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image2->extension();

        $request->image2->storeAs('public/images/imagebefor', $imageName);

        return back()->with('success', 'Image uploaded successfully.');
    }*/
}