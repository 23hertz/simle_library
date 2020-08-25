<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Book extends Model
{
    protected $fillable = ['title', 'author','quantity' ,'about'];

    public function users(){
        $this->hasMany('User::class');
    }

    public function comments(){
        $this->hasMany(Comment::class);
    }

    // public function getBook()

}
