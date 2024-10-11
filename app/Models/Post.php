<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str; // Asegúrate de importar la clase Str


class Post extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $fillable = ['title', 'slug', 'content', 'image', 'user_id'];


    public function setTitleAttribute($value)
{
    $this->attributes['title'] = $value;
    $this->attributes['slug'] = Str::slug($value);
}


public static function generateSlug($title)
{
    $slug = Str::slug($title);
    $count = Post::where('slug', 'LIKE', "{$slug}%")->count();

    return $count ? "{$slug}-{$count}" : $slug;
}





}

