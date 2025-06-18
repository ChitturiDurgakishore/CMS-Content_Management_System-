<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RegisteredUsers;
use App\Models\HeaderNavigation;
use App\Models\Footer;
class HomeController extends Controller

{
    //Header n Users Info
    function HeaderInfo(){
        $headers=HeaderNavigation::where('visibility','true')->get();
         $users=RegisteredUsers::where('verified','1')->get();
         $sociallinks=Footer::where('visibility','true')->where('section','SocialLinks')->get();
         $supportlinks=Footer::where('visibility','true')->where('section','SupportLinks')->get();
         $background=Footer::where('section','BackGround')->first();
        return view('welcome',['headers'=>$headers,'users'=>$users,'sociallinks'=>$sociallinks,'supportlinks'=>$supportlinks,'background'=>$background]);
    }


     function Registration(Request $req){
        $user=RegisteredUsers::create([
            'name'=>$req->name,
            'email'=>$req->email,
            'phone'=>$req->phone,
            'password'=>$req->password,
        ]);
        if($user){
            return "Success";
        }
     }


     function Logging(Request $req){
        $user=RegisteredUsers::where('email',$req->email)->where('password',$req->password)->first();
        // return $user;
        if($user){
            $req->session()->put('id',$user->id);
            $req->session()->put('name',$user->name);
            return redirect('/');
        }
     }



}
