<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User ;
use App\blog ;

class bblogController extends Controller
{
    //


    public function index ()
    {
        //   $blog =blog::all() ;
      return view('welcome');

    }

    public function store (request  $request)
    {

        $this->validate($request ,['email'=>'required','password'=> 'required ','title'=> 'required ' ,'content' =>'required ']) ;


        $email = $request->input('email');
        $password = $request->input('password');
        $title = $request->input('title');
        $content = $request->input('content');

        $new_User = new User() ;
        $new_User ->email = $email ;
        $new_User -> password= $password ;
        $new_User->save ();

        $new_blog = new blog() ;
        $new_blog-> title =  $title ;
        $new_blog->content = $content ;
        $new_blog->user_id = $new_User->id ;
        $new_blog->save ();


        return view('welcome') ;

    }
}
