<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;




class Postcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('blog.index')
        ->with('posts', Post::get() )
      ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' =>'required',
            'description'=>'required',
            'image'=>'required|mimes:jpg,png,jped|max:5048'

        ]);
        $slug = Str::slug($request-> title,'-');
        $newImageName = uniqid(). '-'.$slug. '.' . $request->image->extension(); 
        $request->image->move(public_path('img'),$newImageName);
        
        POST::create([
            'title' =>$request ->input('title'),
            'slug'=>$slug,
            'description' =>$request ->input('description'),
            'image_path' =>$newImageName,
            'user_id'=> auth()->User()->id,

        ]);
        return redirect('/blog');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        return view('blog.show')
        ->with('post',Post::where('slug',$slug)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        return view('blog.edit')
        ->with('post',Post::where('slug',$slug)->first());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {  
        $request->validate([
            'title' =>'required',
            'description'=>'required',
            'image'=>'mimes:jpg,png,jped|max:5048'

        ]);
        $slug = Str::slug($request-> title,'-');
        if($request->hasFile('image')){
        $newImageName = uniqid(). '-'.$slug. '.' . $request->image->extension(); 
        $request->image->move(public_path('img'),$newImageName);
        }
        else{
            $newImageName  =null;
        }
        
     
            POST::where('slug' , $slug)
            ->update([
                'title' =>$request ->input('title'),
                'slug'=>$slug,
                'description' =>$request ->input('description'),
                
                'user_id'=> auth()->User()->id,
    
            ]);
            if($newImageName){
                POST::where('slug' ,$slug)
                ->update([
                    'image_path' =>'img/'. $newImageName,
                ]);
        }
       
        return redirect()->to('/blog/'.$slug)
        ->with('message','the post has been edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        POST::where('slug' , $slug)
        ->delete();
        return redirect()->to('/blog')
        ->with('message','the post has been Deleted');
    }
}
