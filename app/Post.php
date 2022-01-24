<?php

namespace App;
use App\User;
use App\Like;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Auth;

class Post extends Model
{

    protected $table = "posts";

    /**
     * Get the user that owns the Post
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

            public function LikedBy(User $user){

            return $this -> like -> contains ('user_id', $user->id);


            }

 /**
  * Get all of the comments for the PostController
  *
  * @return \Illuminate\Database\Eloquent\Relations\HasMany
  */
  public function like(): HasMany
  {
      return $this->hasMany(Like::class);
  }


  /**
   * Get all of the comments for the Post
   *
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function comment(): HasMany
  {
      return $this->hasMany(Comment::class);
  }

}

