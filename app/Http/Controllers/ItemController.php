<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class ItemController extends Controller
{
    public function frontPage()
    {
        return view('front', [
            'items' => \App\Models\Item::all(),
            'users' => \App\Models\User::all(),
        ]);
    }

    public function itemPage($id)
    {
        $all_users = \App\Models\User::all();
        $this_item = \App\Models\Item::find($id);
        $login_id = Auth::id();

        foreach($all_users as $user)
        {
            if($user->id == $this_item->id_lender)
            {
                $this_user = $user;
            }
        }

        return view('item', [
            'item' => $this_item,
            'user' => $this_user,
            'login_id' => $login_id
        ]);
    }

    public function borrowItem($id)
    {
        $item = $this_item = \App\Models\Item::find($id);
        $item->is_loaned = TRUE;
        $item->id_borrower = Auth::id();
        $item->save();
        return itemController::itemPage($id);
    }
}
