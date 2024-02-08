<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Critic extends Model
{
    use HasFactory;

    protected $table = "critics";
    protected $fillable = ["user_id", "film_id", "content", "point"];

    public function user()
    {
        return $this->belongsToMany('User::class');
    }
    public function film()
    {
        return $this->belongsToMany('Film::class');
    }
}
