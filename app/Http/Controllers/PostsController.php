<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    /**
     * Display a paginated list of posts.
     *
     * @return Response
     */
    public function index()
    {
        $posts = Post::paginate(5);

        return view('posts.index', compact('posts'));
    }

    /**
     * Favorite a particular post
     *
     * @param  Post $post
     * @return Response
     */
    public function favoritePost(Post $post)
    {
        Auth::user()->favorites()->attach($post->id);

        return back();
    }

    /**
     * Unfavorite a particular post
     *
     * @param  Post $post
     * @return Response
     */
    public function unFavoritePost(Post $post)
    {
        Auth::user()->favorites()->detach($post->id);

        return back();
    }

    /**
     * like a particular post
     *
     * @param  Post $post
     * @return Response
     */
    public function likePost(Post $post)
    {
        Auth::user()->likes()->attach($post->id);

        return back();
    }

    /**
     * Unlike a particular post
     *
     * @param  Post $post
     * @return Response
     */
    public function unLikePost(Post $post)
    {
        Auth::user()->likes()->detach($post->id);

        return back();
    }
}
