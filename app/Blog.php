<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['title' , 'metadescription' , 'keywords' , 'heading' , 'description' , 'image' , 'imgalt' , 'content' , 'path'];
}
