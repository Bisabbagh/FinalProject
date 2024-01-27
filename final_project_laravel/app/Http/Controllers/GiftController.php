<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Gift;
use App\Models\UserGift;


class GiftController extends Controller
{
    public function showGifts()
    {
        $gifts = Gift::all();
        return view('/', compact('gifts'));
    }

    public function chooseGift(Request $request, $giftId)
    {
        $user = auth()->user();

        // Check if the user has already chosen this gift
        if ($user->gifts()->where('gift_id', $giftId)->exists()) {
            return redirect()->back()->with('error', 'You have already chosen this gift.');
        }

        // Record the user's choice in the UserGift table
        UserGift::create([
            'user_id' => $user->id,
            'gift_id' => $giftId,
        ]);

        // Update user's points and gift points as needed

        return redirect()->back()->with('success', 'Gift chosen successfully.');
    }
}
