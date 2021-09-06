<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function sub(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this -> belongsToMany(Subcategory::class);
    }
    public function posts(): \Illuminate\Database\Eloquent\Relations\HasManyThrough
    {
        return $this -> hasManyThrough(Post::class, Subcategory::class);
    }


}
