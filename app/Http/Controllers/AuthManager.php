<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;

use Intervention\Image\Laravel\Facades\Image;
class AuthManager extends Controller
{
    function login(){
        return view('login');
    }

    function loginPost(Request $request){

      $name = $request->name;
      $password = $request->password;
     /* $users = new User;
  
      $users->name = 'any';
      $users->email='poon@law';
      $users->password=bcrypt('123');
      $users->save();*/
      $credentials = [
        'name' =>$name,
        'password' => $password
      ];


      if(Auth::attempt($credentials)){
        return redirect()->intended(route('inside'))->with("success","Login is successfully");
      }else{
        return redirect(route('login'))->with("error","Login is fail");
      }

    
    }

    function logout(){
      Auth::logout();
      return redirect()->intended(route('home'));
    }

    function image(){

      return "asd";
    }
}
