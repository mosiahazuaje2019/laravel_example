<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['content','publication_id','status'];

    public function publications()
    {
        return $this->belongsTo('App\Publication');
    }
}
