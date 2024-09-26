<?php

namespace Database\Seeders;

use App\Models\Review;
use App\Models\Tag;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Genre;
use App\Models\Movie;
use App\Models\Person;
use Database\Factories\MovieActorFactory;
use Database\Factories\MovieGenreFactory;
use Database\Factories\MovieTagFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        User::factory(20)->create();

        Person::factory(30)->actor()->create();
        Person::factory(30)->director()->create();

        Genre::factory(20)->create();

        Tag::factory(20)->create();

        Movie::factory(30)->create()->each(function ($movie) {
            $movie->actors()->attach(Person::where('role', 'Actor')->inRandomOrder()->take(5)->pluck('id'));
            $movie->genres()->attach(Genre::inRandomOrder()->take(2)->pluck('id'));
            $movie->tags()->attach(Tag::inRandomOrder()->take(2)->pluck('id'));
        });

        Review::factory(30)->create();


        Movie::insert([
            [
                'title' => 'Monsters',
                'description' => 'An anthology series, centered on the stories of cannibalistic serial killer Jeffrey Dahmer and convicted murderers Lyle and Erik Menendez.',
                'year_published' => 2022,
                'rating' => 7.9,
                'img_url' => 'https://m.media-amazon.com/images/M/MV5BNDAzYzEzZDMtOWE3Ny00MTU3LWIwY2MtMDYzZmYzYTZkYjJkXkEyXkFqcGc@._V1_.jpg',
                'featured' => true,
                'director_id' => 32, // Replace with a valid director ID
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Penguin',
                'description' => 'Following the events of The Batman (2022), Oz Cobb, a.k.a. the Penguin, makes a play to seize the reins of the crime world in Gotham.',
                'year_published' => 2024,
                'rating' => 8.8,
                'img_url' => 'https://lh6.googleusercontent.com/proxy/lXUyKGCHbMOO52nFF4Fi4FJxm0HUDaIdHpZzKTflxoc6tKoMADWBRphWwNmVgqrpQuJG931JELQ5fNlbq5f8mXCH',
                'featured' => true,
                'director_id' => 33, // Replace with a valid director ID
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Agatha All Along',
                'description' => 'A spell-bound Agatha Harkness regains freedom thanks to a teens help. Intrigued by his plea, she embarks on the Witches Road trials to reclaim her powers and discover the teens motivations.',
                'year_published' => 2023,
                'rating' => 6.7,
                'img_url' => 'https://m.media-amazon.com/images/M/MV5BOWRjZDZhNmEtN2FiYi00N2Y5LTgwNTYtZGJlMzBhYmE5MmRhXkEyXkFqcGc@._V1_.jpg',
                'featured' => true,
                'director_id' => 34, // Replace with a valid director ID
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        User::insert([
            'first_name' => 'Peter',
            'last_name' => 'Hampton',
            'username' => 'peter',
            'email' => 'peterhampton@mail.com',
            'birth_date' => '1986-02-05',
            'password' => bcrypt('12345678'),
            'role' => 'Admin'
        ]);



    }
}
