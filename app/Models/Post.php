<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public function comments(){
        return $this->hasMany(Comment::class);
        //return $this->hasOneThrough(Comment::class, User::class);
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function postcategory(){
        return $this->belongsTo(PostCategory::class,'postCategory_id');
    }
    
}
