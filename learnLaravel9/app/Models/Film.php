<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;
    protected $table = "films";
    protected $fillable = ["title", "summary", "year", "poster", "genre_id"];
    public function genre()
    {
        return $this->belongsTo('Genre::class');

    }

    public function critic()
    {
        return $this->hasMany(Critic::class);
    }
    public function role()
    {
        return $this->hasMany(Role::class);
    }
}
