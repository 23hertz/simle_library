<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Borrowed extends Model
{
    protected $fillable = [
        'book_id', 'user_id', 'book_quantity',
    ];
    

    public function returned(){
        return $this->hasOne('Returned::class');
    }

}
