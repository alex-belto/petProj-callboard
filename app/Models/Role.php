<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this -> belongsToMany(User::class);
    }

}
