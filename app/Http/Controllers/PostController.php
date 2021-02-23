<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function all()
    {
        $posts = Post::all();
        $posts = ['posts' => $posts];

        return view('posts.home', $posts);
    }

    public function showPost(Post $post)
    {
        $comments = DB::select('select comment, created_at from comment where article_id = ?', [$post->id]);
        return view('posts.showPost', ['post' => $post, 'comments' => $comments]);
    }

    public function create()
    {
        $defaultPost = new Post();
        $defaultPost->Title = '';
        $defaultPost->Content = '';

        return view('posts.form', ['post' => $defaultPost]);
    }

    public function edit($id)
    {
        $defaultPost = new Post();
        $defaultPost->title = '';
        $defaultPost->content = '';
        $post = Post::findOrFail($id);

        return view('posts.form', ['post' => $post]);
    }

    public function save(Request $request)
    {
        $post = new Post();
        $post->title = htmlspecialchars(strip_tags(trim($request->input('Title'))));
        $post->content = htmlspecialchars(trim($request->input('Content')));
        $post->save();
        return redirect()->action(
            [PostController::class, 'showPost'], ['post' => $post]
        );
    }
}
