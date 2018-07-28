<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Post extends Model
{
    /**
     * Determine whether a post has been marked as favorite by a user.
     *
     * @return boolean
     */
    public function favorited()
    {
        return (bool) Favorite::where('user_id', Auth::id())
                            ->where('post_id', $this->id)
                            ->first();
    }

    /**
     * Determine whether a post has been marked as like by a user.
     *
     * @return boolean
     */
    public function liked()
    {
        return (bool) Like::where('user_id', Auth::id())
                            ->where('post_id', $this->id)
                            ->first();
    }
}
