<?php


namespace App\Models;


trait Follawable
{


    public function following()
    {
        return $this->belongsToMany('\App\Models\User', 'follows', 'user_id', 'following_user_id');
    }

    public function unfollow (User $user): int
    {
        return $this->following()->detach($user);
    }
    public function follow(User $user)
    {
        return $this->following()->save($user);
    }

    public function is_following(User $user){
        return $this-> following()->where('following_user_id',$user->id)->exists();
    }

    public function toggleFollow(User $user){
        if ($this->is_following($user)){
            return $this->unfollow($user);
        }
        return $this->follow($user);
    }

}
