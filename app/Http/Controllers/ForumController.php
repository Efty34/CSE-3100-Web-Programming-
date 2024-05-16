<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Reply;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function forumPage()
    {
        $posts = Post::with('user')->latest()->get()->load('replies.user');
        // $replies = Reply::with('user')->latest()->get();
        return view('forum.forum-page', [
            'posts' => $posts
            // 'replies' => $replies
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

    // public function replyForm(Post $post)
    // {

    //     return view('forum.reply', [
    //         'post' => $post
    //     ]);
    // }

    public function replyForm(Post $post)
    {
        $post->load('replies.user');  // Eager load replies and the users who made those replies
        return view('forum.reply', [
            'post' => $post
        ]);
    }



    public function storeReply(Request $request, Post $post)
    {
        $request->validate([
            'body' => 'required|string',
        ]);

        $reply = new Reply();
        $reply->body = $request->body;
        $reply->user_id = auth()->id();
        $reply->post_id = $post->id;
        $reply->save();

        // return redirect()->route('forum.forum-page')->with('message', 'Reply added successfully');
        return back()->with('message', 'Reply added successfully');
    }
}
