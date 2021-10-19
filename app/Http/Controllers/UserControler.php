<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\member;
class UserControler extends Controller
{
    //
     function user_signup(Request $req){
       $user = new member;
       $user->name = $req->name;
       $user->email = $req->email;
       $user->password = $req->password;
       $user->save();
       return redirect("user_login");
    }
   function user_signin(Request $req){
       
        $email = $req->email;
       $password = $req->password;
       $data = member:: all();
       foreach($data as $data){
           $email1= $data->email;
            $pass =$data->password;
            if($email1==$email && $password==$pass &&(!empty($email))&& (!empty($password))){
                $req -> session() -> put('email',$email);
                 return redirect("home");
            }
            else{
                 return redirect("user_sign_up");
                // return back()->with('success','Item created successfully!');
                //  return redirect()->route('user_sign_up')->with('error','You have no permission for this page!');
            }
       }
      
       
      
    }
}
