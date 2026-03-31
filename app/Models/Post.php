<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// app/Models/Post.php
class Post extends Model
{
    protected $fillable = ['title', 'content'];
}