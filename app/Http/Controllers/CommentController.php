<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\comment;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class CommentController extends Controller
{
    public function save(Request $request)
    {
        $comment = new comment();
        $comment->article_id = $request->input('article_id');
        $comment->comment = htmlspecialchars(strip_tags(trim($request->input('comment'))));
        $comment->created_at = date("Y-m-d H:i:s");
        $comment->updated_at = date("Y-m-d H:i:s");
        $comment->save();
        return redirect('/showPost/'. $request->input('article_id'));
    }
}
