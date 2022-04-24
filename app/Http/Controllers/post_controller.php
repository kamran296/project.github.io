<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Post;
use App\Models\Posts;

class post_controller extends Controller
{
    //
    public function addpost()
    {
        # code...
        return view('create-post');
    }


    public function createpost(Request $request)
    {
        # code...
        $posts = new Posts();
        $posts->post_title = $request->post_title;
        $posts->post_date = $request->post_date;
        $posts->post_description = $request->post_description;
        $posts->post_image = $request->post_image;

        $posts->save();
        return back()->with('post_created','Post has been created successfully');
    }

    public function getPost()
    {
        $posts = Posts::orderBy('id','DESC')->get();
        return view('posts',compact('posts'));
    }
   
    
}
