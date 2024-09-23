<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    public function director()
    {
        return $this->belongsTo(Person::class, 'director_id');
    }

    public function actors()
    {

        return $this->belongsToMany(Person::class, 'movie_person', 'movie_id', 'person_id')
            ->where('role', 'Actor'); // Filter for actors
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'movie_genre', 'movie_id', 'genre_id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'movie_tag', 'movie_id', 'tag_id');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
