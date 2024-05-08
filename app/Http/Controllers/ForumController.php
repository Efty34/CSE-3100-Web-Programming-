<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function forumPage()
    {
        $posts = Post::with('user')->latest()->get();
        return view('forum.forum-page', [
            'posts' => $posts
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $post = new Post($request->all());
        $post->user_id = auth()->id();
        $post->save();

        return redirect()->route('forum.forum-page')->with('message', 'Post created successfully');;
    }



    public function destroy(Post $post)
    {
        
        // if (auth()->id() !== $post->user_id) {
        //     return redirect()->back()->with('error', 'You do not have permission to delete this post.');
        // }

        $post->delete();
        return redirect()->route('homepage.user-profile')->with('message', 'Post deleted successfully.');
    }
}
