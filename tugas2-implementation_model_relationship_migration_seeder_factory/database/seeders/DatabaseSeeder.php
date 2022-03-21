<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(4)->create();
        Post::factory(20)->create();

        // User::create([
        //     'name' => 'Timotius Wirawan',
        //     'email' => 'timotiuswirawan@app.com',
        //     'password' => bcrypt('12345')
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur quibusdam iste expedita repellendus eaque suscipit labore sequi voluptates autem ut, culpa dolorem, nesciunt veniam amet rem assumenda sapiente qui molestias',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur quibusdam iste expedita repellendus eaque suscipit labore sequi voluptates autem ut, culpa dolorem, nesciunt veniam amet rem assumenda sapiente qui molestias',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'judul Ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur quibusdam iste expedita repellendus eaque suscipit labore sequi voluptates autem ut, culpa dolorem, nesciunt veniam amet rem assumenda sapiente qui molestias',
            'category_id' => 2,
            'user_id' => 1
        ]);
    }
}
