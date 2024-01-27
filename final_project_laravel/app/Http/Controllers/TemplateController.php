<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gift;
use App\Models\GiftUser;


class TemplateController extends Controller
{
    public function index(){
        $gifts = Gift::all();
        return view('home', compact('gifts'));
    }
    public function serves(){
        return view('serves');
    }
    public function admin(){
        return view('admindashboard');
    }
    public function table(){
        return view('points.view');
    }


    public function showGifts()
    {
        $gifts = Gift::all();
        return view('home', compact('gifts'));
    }

    public function chooseGift(Request $request, $giftId)
    {
        $user = auth()->user();
        $gift = Gift::find($giftId);

        // Check if the user has already chosen this gift
        if ($user->gifts()->where('gift_id', $giftId)->exists()) {
            return redirect()->back()->with('error', 'You have already chosen this gift.');
        }

        // Check if the user has enough points to choose the gift
        if ($user->all_point < $gift->point) {
            return redirect()->back()->with('error', 'Not enough points to choose this gift.');
        }

        // Record the user's choice in the GiftUser table
        GiftUser::create([
            'user_id' => $user->id,
            'gift_id' => $giftId,
        ]);

        // Update user's points by subtracting the gift points
        $user->all_point -= $gift->point;
        $user->save();

        return redirect()->back()->with('success', 'Gift chosen successfully.');
    }

}
