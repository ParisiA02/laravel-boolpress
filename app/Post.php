<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'author', 
        'subtitle', 
        'content',
        'date',
        'category_id',
    ];

    public function category(){
        return $this -> belongsTo(Category::class);
    }
}
