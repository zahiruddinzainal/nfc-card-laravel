<?php

namespace App\Http\Controllers;
use App\Models\Card;

use Illuminate\Http\Request;

class CardController extends Controller
{
    function insert(Request $request)
    {
        // dd($request->all());

        $this->validate($request, [
            'username' => 'required',
            'name' => 'required',
            'company' => 'required',
            'title' => 'required',
            'address' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'web' => 'required',
            'facebook' => 'required',
            'twitter' => 'required',
            'insta' => 'required',
            'youtube' => 'required',
            'shopee' => 'required',
        ]);

        $add = new Card();
        $add->username = $request->input('username');
        $add->name = $request->input('name');
        $add->company = $request->input('company');
        $add->title = $request->input('title');
        $add->address = $request->input('address');
        $add->email = $request->input('email');
        $add->phone = $request->input('phone');
        $add->web = $request->input('web');
        $add->facebook = $request->input('facebook');
        $add->twitter = $request->input('twitter');
        $add->insta = $request->input('insta');
        $add->youtube = $request->input('youtube');
        $add->shopee = $request->input('shopee');
        $add->save();

        return redirect($request->username);
    }

    public function displayprofile(Card $key)
    {
        $data = $key;
        // return $data;

        $skills = Card::where('username', $key->username)->get();
        return view('profile')->with(compact('data'));
    }

    public function displayedit(Card $key)
    {
        $data = $key;
        // return $data;
        $data = Card::where('username',$key->username)->first();
        return view('edit')->with(compact('data'));
    }

    function update(Request $request)
    {
        // dd($request->all());

        Card::where('username',$request->username)->delete();

        $this->validate($request, [
            'username' => 'required',
            'name' => 'required',
            'company' => 'required',
            'title' => 'required',
            'address' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'web' => 'required',
            'facebook' => 'required',
            'twitter' => 'required',
            'insta' => 'required',
            'youtube' => 'required',
            'shopee' => 'required',
        ]);

        $add = new Card();
        $add->username = $request->input('username');
        $add->name = $request->input('name');
        $add->company = $request->input('company');
        $add->title = $request->input('title');
        $add->address = $request->input('address');
        $add->email = $request->input('email');
        $add->phone = $request->input('phone');
        $add->web = $request->input('web');
        $add->facebook = $request->input('facebook');
        $add->twitter = $request->input('twitter');
        $add->insta = $request->input('insta');
        $add->youtube = $request->input('youtube');
        $add->shopee = $request->input('shopee');
        $add->save();

        return redirect($request->username. '/edit');
    }
}

