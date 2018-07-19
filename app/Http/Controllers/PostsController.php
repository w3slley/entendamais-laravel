<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$posts = Post::where('id', 2)->get();//If you use where, you have to use get() as well!
        $posts = Post::orderBy('id', 'DESC')->get();
        
        return view('posts.index')->with(['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'post_content' => 'required',
            'cover_image' => 'image|nullable|max:5999'
        ]);

        if($request->hasFile('cover_image')){//If a image was uploaded
            $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();//Getting the full name of the image
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);//Getting only the part before the "."
            $extension = $request->file('cover_image')->getClientOriginalExtension();//Getting only the extension of the image
            $fileNameDb = $filename."_".time().".".$extension;//Using the file name and extension to create a unique name for each image inserting the current time the image was uploaded

            $request->file('cover_image')->storeAs('public/cover_images', $fileNameDb);//moving the file to the public/cover_images location. This is in the storage folder (storage/app/public/cover_images) in this case
        }
        else{
            $fileNameDb = ''; //if no image was uploaded, then a empty string will go to the database!
        }
        //Saving the information. I'm realising that I'm more confortable now using this method than the create one. I'll use this for now and when I become more familiar and advanced with laravel I'll make the transition.
        $post = new Post;
        $post->title = $request->input('title');
        $post->post_content = $request->input('post_content');
        $post->cover_image = $fileNameDb;
        $post->save();

        return redirect('/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($title)
    {
        $real_title = str_replace('-', ' ', $title);
        $post = Post::where('title', $real_title)->get();
        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
