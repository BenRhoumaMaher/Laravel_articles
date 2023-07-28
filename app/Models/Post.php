<?php

namespace App\Models;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'title',
        'body',
        'excerpt',
        'image_path',
        'is_published',
        'min_to_read'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function meta(){
        return $this->hasOne(PostMeta::class);
    }
    public function categories(){
        return $this->belongsToMany(Category::class);
    }
}