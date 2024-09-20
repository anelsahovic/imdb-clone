<?php

use App\Models\Genre;
use App\Models\Movie;
use App\Models\Person;
use App\Models\Tag;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('year_published');
            $table->decimal('rating', 2, 1)->default(0);
            $table->foreignId('director_id')->constrained('persons')->cascadeOnDelete();
            $table->timestamps();
        });


        Schema::create('movie_genre', callback: function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Movie::class)->constrained();
            $table->foreignIdFor(Genre::class)->constrained();
        });

        Schema::create('movie_tag', callback: function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Movie::class)->constrained();
            $table->foreignIdFor(model: Tag::class)->constrained();
        });

        Schema::create('movie_actor', callback: function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Movie::class)->constrained();
            $table->foreignId('actor_id')->constrained('persons');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
        Schema::dropIfExists('movie_genre');
        Schema::dropIfExists('movie_tag');
        Schema::dropIfExists('movie_actor');
    }
};
