<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function login(Request $req )
    {
        $user= Db::table("user")->where("email", $req->email)->first();
        if( Hash::check($req->password,$user->password) ) {
            return  redirect("logged");
        }
        else {
            return "not availble";
        }
    
}
}
