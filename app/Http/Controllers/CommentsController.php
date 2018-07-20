<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentsController extends Controller
{
   public function store(Request $request){
       $this->validate($request, [
           'author' => 'required',
           'comment' => 'required'
       ]);

       $comment = new Comment;
       $comment->post_slug = $request->input('post_uri');
       $comment->author = $request->input('author');
       $comment->comment = $request->input('comment');
       $comment->save();

        $path = '/posts/'.$request->post_uri;
       return redirect($path);
   }
}
