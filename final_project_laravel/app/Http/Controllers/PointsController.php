<?php

namespace App\Http\Controllers;
use App\Models\Point;
use App\Models\User;
use Illuminate\Http\Request;

class PointsController extends Controller
{
    public function addPoints(Request $request)
{
    $userId = $request->input('user_id');
    $pointsToAdd = $request->input('points', 10); // Default to 10 points if not specified

    // Update points in the 'points' table
    Point::create([
        'user_id' => $userId,
        'points' => $pointsToAdd,
    ]);

    // Update 'all_point' in the 'users' table
    $user = User::find($userId);
    $user->all_point += $pointsToAdd;
    $user->save();

    return redirect()->back()->with('success', 'Points added successfully.');
}
}
