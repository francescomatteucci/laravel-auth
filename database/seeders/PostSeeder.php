<?php

namespace Database\Seeders;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //
        for ($i=0; $i < 10 ; $i++) { 
            # code...
            $post = new Post();
            $title =$faker->sentence(8);
            $post->title = $title;
            $post->slug = Str::slug($title);
            $post->content = $faker->optional()->text(400);
            $post->save();
        }
    }
}