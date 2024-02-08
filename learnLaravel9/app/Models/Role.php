<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $table = "roles";
    protected $fillable = ["film_id", "cast_id", "name"];

    public function cast()
    {
        return $this->belongsToMany('Cast::class');
    }
    public function film()
    {
        return $this->belongsToMany('Film::class');
    }
}
