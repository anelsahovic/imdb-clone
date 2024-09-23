<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $table = "persons";

    public function movies()
    {
        // A person can be in many movies (actors and directors)
        return $this->belongsToMany(Movie::class, 'movie_person', 'person_id', 'movie_id');
    }

    public function moviesAsActor()
    {
        // Get movies where the person is an actor
        return $this->movies()->where('role', 'Actor');
    }

    public function moviesAsDirector()
    {
        // Get movies where the person is a director
        return $this->movies()->where('role', 'Director');
    }
}
