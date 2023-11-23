<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::create([
            'name' => 'Fauzi Kirito',
            'username' => 'fauzikirito',
            'email' => 'fauziilyasfin@gmail.com',
            'password' => bcrypt('1478963qw')
        ]);

        // User::create([
        //     'name' => 'Muhammad Lutfi Amin Ghifarullah',
        //     'email' => 'ghifarullah19@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'UI/UX',
            'slug' => 'ui-ux'
        ]);

        Category::create([
            'name' => 'Cloud Computing',
            'slug' => 'cloud-computing'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Belajar Web Programming untuk Pemula',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloribus cumque quo nemo unde tempore, veniam consequatur ullam ab, dicta adipisci dolores quas rerum cupiditate et quos reiciendis sapiente officiis dolorum aspernatur corrupti!</p><p>Animi, reiciendis recusandae odit eius minus quasi dolor dignissimos? Quasi quas facere fugiat odit amet, cumque officia commodi saepe accusamus mollitia quod omnis.</p>',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Tutuorial Jago Desain UI/UX',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloribus cumque quo nemo unde tempore, veniam consequatur ullam ab, dicta adipisci dolores quas rerum cupiditate et quos reiciendis sapiente officiis dolorum aspernatur corrupti!</p><p>Animi, reiciendis recusandae odit eius minus quasi dolor dignissimos? Quasi quas facere fugiat odit amet, cumque officia commodi saepe accusamus mollitia quod omnis.</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'UI/UX for Beginners',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloribus cumque quo nemo unde tempore, veniam consequatur ullam ab, dicta adipisci dolores quas rerum cupiditate et quos reiciendis sapiente officiis dolorum aspernatur corrupti!</p><p>Animi, reiciendis recusandae odit eius minus quasi dolor dignissimos? Quasi quas facere fugiat odit amet, cumque officia commodi saepe accusamus mollitia quod omnis.</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Web Programming for Beginners',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloribus cumque quo nemo unde tempore, veniam consequatur ullam ab, dicta adipisci dolores quas rerum cupiditate et quos reiciendis sapiente officiis dolorum aspernatur corrupti!</p><p>Animi, reiciendis recusandae odit eius minus quasi dolor dignissimos? Quasi quas facere fugiat odit amet, cumque officia commodi saepe accusamus mollitia quod omnis.</p>',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
