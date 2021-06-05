<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\hash;

use Illuminate\Http\Request;
use App\Models\User;

class usercontroller extends Controller
{
    //
    function login(request $req)
    {
      $user= user::where(['email'=>$req->email])->first();
      if(!$user || !hash::check($req->password,$user->password))
      {
          return "username or password doesnot match";
      }
      else{
          $req->session()->put('user',$user);
          return redirect('/');
      }
    }
    function register (request $req)
    {
        $user = new user;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=Hash::make($req->password);
        $user->save();
        return redirect ('/login');


    }
}
