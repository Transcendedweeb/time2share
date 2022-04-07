<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class ReviewController extends Controller
{
    public function review($userId, $itemId)
    {
        return view('review', [
            'userId' => $userId,
            'itemId' => $itemId,
        ]);
    }

    public function store(Request $request, \App\Models\Review $review, $userId, $itemId)
    {
        $review->recommendation = $request->input('recommendation');
        $review->message = $request->input('message');
        
        $review->id_sender = Auth::id();
        $review->id_recipient = $userId;
        $review->save();

        $item = \App\Models\Item::find($itemId);
        $item->is_loaned = FALSE;
        $item->id_borrower = NULL;
        $item->save();

        return UserController::accountPage();
    }

    public function skip($itemId)
    {
        $item = \App\Models\Item::find($itemId);
        $item->is_loaned = FALSE;
        $item->id_borrower = NULL;
        $item->save();
        return UserController::accountPage();
    }
}
