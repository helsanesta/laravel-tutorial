<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Article;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Article::factory(20)->create();

        // User::create([
        //     'name' => 'Helsa Nesta Dhaifullah',
        //     'email' => 'helsadhaifullah@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Nadya Permata Sari',
        //     'email' => 'nadyapermata@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // Category::create([
        //     'name' => 'Web Programming',
        //     'slug' => 'web-programming'
        // ]);

        // Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal'
        // ]);

        // Article::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem enim nihil,',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem enim nihil, libero commodi maxime excepturi suscipit tenetur dicta incidunt dolores. Eveniet alias amet eius magni saepe nesciunt, facilis labore nostrum adipisci est, ut dolorem quidem ducimus, ratione officiis? Dolore eveniet inventore maiores voluptatum? Possimus impedit minima illum reiciendis dignissimos, quae tenetur libero nihil quod sunt consequuntur quas beatae minus omnis sint, error exercitationem aliquid voluptatum distinctio provident placeat quos. Cupiditate repellat iure quo voluptatem corrupti? Blanditiis neque, consequuntur, perspiciatis officiis vitae voluptate recusandae sapiente odit dignissimos quasi iste soluta expedita libero autem a excepturi dolor sunt aspernatur veritatis minus iure.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Article::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem enim nihil,',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem enim nihil, libero commodi maxime excepturi suscipit tenetur dicta incidunt dolores. Eveniet alias amet eius magni saepe nesciunt, facilis labore nostrum adipisci est, ut dolorem quidem ducimus, ratione officiis? Dolore eveniet inventore maiores voluptatum? Possimus impedit minima illum reiciendis dignissimos, quae tenetur libero nihil quod sunt consequuntur quas beatae minus omnis sint, error exercitationem aliquid voluptatum distinctio provident placeat quos. Cupiditate repellat iure quo voluptatem corrupti? Blanditiis neque, consequuntur, perspiciatis officiis vitae voluptate recusandae sapiente odit dignissimos quasi iste soluta expedita libero autem a excepturi dolor sunt aspernatur veritatis minus iure.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Article::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem enim nihil,',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem enim nihil, libero commodi maxime excepturi suscipit tenetur dicta incidunt dolores. Eveniet alias amet eius magni saepe nesciunt, facilis labore nostrum adipisci est, ut dolorem quidem ducimus, ratione officiis? Dolore eveniet inventore maiores voluptatum? Possimus impedit minima illum reiciendis dignissimos, quae tenetur libero nihil quod sunt consequuntur quas beatae minus omnis sint, error exercitationem aliquid voluptatum distinctio provident placeat quos. Cupiditate repellat iure quo voluptatem corrupti? Blanditiis neque, consequuntur, perspiciatis officiis vitae voluptate recusandae sapiente odit dignissimos quasi iste soluta expedita libero autem a excepturi dolor sunt aspernatur veritatis minus iure.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Article::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem enim nihil,',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem enim nihil, libero commodi maxime excepturi suscipit tenetur dicta incidunt dolores. Eveniet alias amet eius magni saepe nesciunt, facilis labore nostrum adipisci est, ut dolorem quidem ducimus, ratione officiis? Dolore eveniet inventore maiores voluptatum? Possimus impedit minima illum reiciendis dignissimos, quae tenetur libero nihil quod sunt consequuntur quas beatae minus omnis sint, error exercitationem aliquid voluptatum distinctio provident placeat quos. Cupiditate repellat iure quo voluptatem corrupti? Blanditiis neque, consequuntur, perspiciatis officiis vitae voluptate recusandae sapiente odit dignissimos quasi iste soluta expedita libero autem a excepturi dolor sunt aspernatur veritatis minus iure.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
