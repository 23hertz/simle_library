<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['user_id', 'book_id', 'comments'];

    public function book(){
        $this->hasMany(Book::class);
    }

    public function user(){
        $this->belongsTo(Comment::class);
    }
    
}
