<?php


namespace App\Models;



use Illuminate\Database\Eloquent\Builder;

trait Likeable
{

    public function scopeWithLikes(Builder $query){
       return $query->leftJoinSub('select tweet_id,sum(liked) likes ,sum(!liked) dislikes from likes group by tweet_id',
            'likes','likes.tweet_id','tweets.id');
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function like($user = null, $like = true)
    {
        return $this->likes()->updateOrCreate(
            [
                'user_id' => $user ? $user->id : auth()->id()
            ],
            [
                'liked' => $like
            ]
        );
    }

    public function dislike($user)
    {
        return $this->like($user, false);
    }

    public function isLikedBy(User $user): bool
    {
        return $user->likes->where('tweet_id',$this->id)->where('liked',true)->count();
    }
}
