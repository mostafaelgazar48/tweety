<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;

class TweetController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('home',[
            'tweets'=>auth()->user()->timeline()
        ]);
    }


    public function store(Request $request){
        $request->validate(['tweet'=>'required']);
        Tweet::create([
            'user_id'=> auth()->user()->id,
            'body'=>\request('tweet')
        ]);
        return redirect('/tweets');    }
}
