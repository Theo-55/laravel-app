<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Category::truncate();
        Post::truncate();

        // Post::factory->create();

        $user = User::factory()->create();

        $personal = Category::create([
            'name' => 'personal',
            'slug' => 'personal'
        ]);

        $hobbies = Category::create([
            'name' => 'hobbies',
            'slug' => 'hobbies'
        ]);


        Post::create([
            'user_id' => $user->id,
            'category_id' => $personal->id,
            'slug' => 'myFirstPost',
            'title' => 'My First Post',
            'excerpt' => 'Welcome to the new post that has been seeded',
            'body' => 'WELCOME TO THE FAMILY'
        ]);


        
        Post::create([
            'user_id' => $user->id,
            'category_id' => $hobbies->id,
            'slug' => 'mySecondPost',
            'title' => 'My Second Post',
            'excerpt' => 'Welcome to the new post that has been seeded',
            'body' => 'WELCOME TO THE FAMILY'
        ]);
    }
}
