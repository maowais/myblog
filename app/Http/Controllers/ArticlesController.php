<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User ;
use App\blog ;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use View;

class ArticlesController extends Controller
{

    public function index()
    {
        return view('welcome');
    }


    public function create()
    {

    }

    public function store(Request $request)
    {

        $this->validate($request, ['email' => 'required', 'password' => 'required ', 'title' => 'required ', 'content' => 'required ']);
        $name= $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $title = $request->input('title');
        $content = $request->input('content');

        $new_User = new User();
        $new_User->name = $name;
        $new_User->email = $email;
        $new_User->password = $password;
        $new_User->save();

        $new_blog = new blog();
      //  $new_blog->title = $title;
      //  $new_blog->content = $content;
     //   $new_blog->user_id = $new_User->id;
      //  $new_blog->save();

        $ID = DB::table('blog')->insertGetId(['title'=>$title,  'content' =>$content, 'user_id'=>$new_User->id] );
        $blog = DB::table('blog')
            ->where('ID', '=', $ID)
            ->distinct()->get();
          //  DB::table('blog')-> select("id",$ID) ;
        //insertGetId(['title'=>$title,  'content' =>$content, 'user_id'=>$new_User->id] );
        
       //print_r($blog);die;
        return view('show')->with(array('blog'=>$blog[0]));
//
//        return redirect('show', ['id' => $ID , 'blog' => $blog]);

    }


    public function show($id)

    {
        return redirect('update',  $id.value('id'));


    }





    public function update($id ,Request $request)


    {
        $title = $request->input('title');
        $content = $request->input('content');
       DB::table('blog')->where('id', $id)->update(['title'=>$title ,'content'=>$content]);

        $blog = DB::table('blog')
            ->where('ID', '=', $id)
            ->distinct()->get();

        return view('store','$blog');


    }


    public function destroy( id $id)
    {
       DB::table('blog')->where('id','$id')->delete();

        return redirect('/Artical');
    }
}
