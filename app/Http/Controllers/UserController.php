<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class UserController extends Controller
{
    public function accountPage($id = null)
    {
        if($id == null) $id = Auth::id();

        return view('account', [
            'user' => \App\Models\User::find($id),
            'users' => \App\Models\User::all(),
            'items' => \App\Models\Item::all(),
            'reviews' => \App\Models\Review::where("id_recipient", "=", $id)->get(),
        ]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request, \App\Models\Item $new_item)
    {
        $new_item->item_name = $request->input('item_name');
        $new_item->tag = $request->input('tag');
        $new_item->description = $request->input('description');
        
        $image = $request->input('tag');
        $new_item->image = "/img/{$image}.png";
        
        $new_item->loan_time = $request->input('loan_time');
        $new_item->id_lender = Auth::id();

        $new_item->save();
        return redirect("/myaccount");
    }

    public function logout()
    {
        Auth::logout();
        return redirect("/");
    }
}
