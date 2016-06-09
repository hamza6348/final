<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller{

    //returns our authorised page
    public function getdashboard(){
        $posts=Post::orderBy('created_at','desc')->get();


        return view('dashboard',[
            'posts'=>$posts

        ]);
    }


  public function postCreatePost(Request $request){
      //validationgoeshere

      $this->validate($request,[
          'body'=>'required|max:1000'


      ]);

      $post=new Post();
      $post->body=$request['body'];//body will be name of a textarea in post form
      $message='There was an error';

      if($request->user()->posts()->save($post)){
          $message='Post Created Suceesfully';
      }
      return redirect()->route('dashboard')->with(['message'=>$message]);



  }


    public function getDeletePost($post_id){

        $post=Post::where('id',$post_id)->first();
        if(Auth::user()!=$post->user)
        {
            return redirect()->back();
        }
        $post->delete();
        return redirect()->route('dashboard')->with(['message'=>'sucessfully deleted']);
        
        
    }









}