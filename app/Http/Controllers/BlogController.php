<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use Session;

class BlogController extends Controller
{
    public function create(Request $request){
    	$request->validate([
           'path' => 'required|max:40',
	       'title' => 'required|max:60',
	       'metadescription' => 'required|max:160',
	       'keywords' => 'required|max:200',
	       'heading' => 'required|max:100',
	       'description' => 'required|max:200',
	       'image' => 'required|mimes: jpg,png,jpeg|max:500',
	       'imgalt' => 'required|max:40'       
	    ]);
        $create = Blog::create([
            'path' => $request->path,
        	'title' => $request->title,
        	'metadescription' => $request->metadescription,
        	'keywords' => $request->keywords,
            'heading' => $request->heading,
            'description' => $request->description,
            $photo = $request->image,
	    	$name = $photo->getClientOriginalName(),
	    	$newname = time().$name,
	    	$photo->move('uploads/headings',$newname),
	    	$url = 'uploads/headings/'.$newname,
	    	'image' => $url,
	    	'imgalt' => $request->imgalt,
            'content' => $request->content
        ]);
        if($create){
    		Session::flash('success','upload successful');
    	}else{
    		Session::flash('error','Error Found');
    	}
        return redirect()->back();
    }
    public function view(){
    	   $post = Blog::orderBy('id','desc')->paginate(8);
    	   return view('blog.blog')->with('post',$post);
    }
    public function adminView(){
    	   $post = Blog::orderBy('id','desc')->paginate(8);
    	   return view('blog.admin-blog')->with('post',$post);
    }
    public function blogview($path){
    	   $blogpost = Blog::where('path',$path)->get();
    	   return view('blog.view')->with('blogpost',$blogpost);
    }
    public function del($id){
            $blogpost = Blog::find($id);
            $blogpost->delete();
            return redirect()->back();
    }
}
