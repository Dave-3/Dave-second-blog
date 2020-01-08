<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogsController extends Controller
{
    
    public function save(Request $request)
    {
        $request->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);

        $story = new Blog();
        $story->title = $request->input('title');
        $story->description=$request->input('description');
       	$story->typeofnews=$request->input('typeofnews');
        $story->image=$imageName;
        $story->save();


      return redirect()->back();
    }
     public function trending()
    {
       $trending = Blog::where('typeofnews', 'like', '%' . 'Trending')->get();
         return view('blog.trending')->with('trending',$trending); 
    }
     public function dashtrending()
    {
       $trending = Blog::all();
         return view('dashboard.tables')->with('trending',$trending); 
    }
      public function sports()
    {
       $sports = Blog::where('typeofnews', 'like', '%' . 'Sports')->get();
         return view('blog.sports')->with('sports',$sports); 
    }
   
      public function news()
    {
       $news = Blog::where('typeofnews', 'like', '%' . 'News')->get();
         return view('blog.news')->with('news',$news); 
    }
    
     public function edit($id)
    {
        $blogs=Blog::find($id);


        return view('dashboard.edit')
        ->with('blog', $blogs);

    }
    public function update(Request $request, $id)
    {
 		
       $blogs =Blog::where('id', $id)->update([
        'title' => $request->input('title'),
        'description' => $request->input('description'),
        'typeofnews' => $request->input('typeofnews')
       ]);

        
         return redirect()->back();
         
        
    }
    public function delete($id)
    {
       
        $blogs=Blog::find($id)
        ->delete();
        return redirect()->back(); 
    }

}


