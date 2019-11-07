<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\UserPost;

class ProfileController extends Controller
{
    //

     public function index(Request $request)
    {
        # code... It simply returns view
        

        $req_id = (auth()->id());

        $route  = route('store',['id' => $req_id ]);

        return view('layouts.navbar.Profile')->withroute($route);

    }
    

     public function store(Request $request)
    {
        # code...

        $request->validate([
            'title' => 'required',
            'content' => 'required',
        
        ]);
    
        $StoreUserFormInput = new UserPost(); 

        $StoreUserFormInput->title = $request->get('title');

        $StoreUserFormInput->content = $request->get('content');

        $StoreUserFormInput->User_id = auth()->id();

        $StoreUserFormInput->save();

        return redirect('/');

    }

    
}
