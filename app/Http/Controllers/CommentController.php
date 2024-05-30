<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        return view('comments.index', [
            'comments' => Comment::latest()->get()
        ]);
    }

     public function edit(Comment $comment)
    {
        return view('comments.edit', [
            'comment' => $comment
        ]);
    }

     public function update(Request $request, Comment $comment)
    {
        $request->validate([
            'body' => 'required'
        ]);

        $comment->update(['body' => $request->body]);

        return back();
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();

        return redirect()->route('comments.index');
    }
}
