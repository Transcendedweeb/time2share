<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function banhammer($id)
    {
        $account = \App\Models\User::find($id);
        $account->is_blocked = TRUE;
        $account->save();
        \App\Models\Item::where('id_lender', $id)->delete();
        \App\Models\Review::where('id_sender', $id)->delete();
        return redirect("/myaccount");
    }

    public function removeItem($id)
    {
        \App\Models\Item::find($id)->delete();
        return redirect("/myaccount");
    }
}
