<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    //login
    public function login(Request $request)
    {
        
      $user= User::where("email", $request->email)->first();
      if(!Hash::check($request->password,$user->password )){
          $request->session()->put("user",$user); 
         
         return redirect('/india');
          }
      else
      {return "love you";}
      
    }
}

