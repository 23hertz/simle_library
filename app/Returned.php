<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Returned extends Model
{
    
    protected  $fillable = ['user_id','book_id','borrowed_id','returned'];

    public function borrowed(){
        return $this->belongsTo(Borrowed::class);
    }

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

}
