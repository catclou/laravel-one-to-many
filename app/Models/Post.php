<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'content', 'image', 'slug'
    ];

    public function Categories(){

        // realizzo la relazione con il model di Category
        return $this->belongsTo('App\Models\Category');

    }
}
