<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Photo;
use App\Models\Point;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class TAController extends Controller
{
    public function nammmmmm()
{
    $users = User::with('photos', 'points')->get(); // Get all users with their photos and points

    // Fetch the latest images for each user
    $latestImages = [];
    foreach ($users as $user) {
        $latestImages[$user->id] = Photo::where('user_id', $user->id)
            ->orderBy('created_at', 'desc')
            ->first();
    }

    return view('view2', compact('users', 'latestImages'));
}
}
