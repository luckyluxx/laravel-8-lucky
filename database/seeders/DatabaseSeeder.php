<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Category;
use \App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Lucky Ardiansyah',
            'username' => 'lucky',
            'email' => 'lucky@ardiansyah.com',
            'password' => bcrypt('ardiansyah')
        ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Daily life',
            'slug' => 'daily-life'
        ]);
        
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Athletics',
            'slug' => 'athletics'
        ]);
        
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Post::factory(24)->create();

        // Post::create([
        //     'title' => 'First Article',
        //     'slug' => 'first-article',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex alias dolore porro atque, a sint incidunt accusamus adipisci in quibusdam sunt veritatis, est sequi ipsum?',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex alias dolore porro atque, a sint incidunt accusamus adipisci in quibusdam sunt veritatis, est sequi ipsum? Praesentium doloremque blanditiis rerum totam eum minus nesciunt enim, esse animi voluptatibus. Eos a, quo laborum dignissimos quae molestias suscipit facilis accusantium quasi doloremque! Est, quisquam velit incidunt consectetur impedit voluptates labore, reprehenderit eius adipisci quod praesentium, blanditiis temporibus laudantium. Vitae, soluta explicabo voluptate laborum quo perferendis, esse facilis rerum sunt magnam alias nihil accusamus dignissimos tempora iure repellat minus vel, animi distinctio!',
        //     'user_id' => 1,
        //     'category_id' => 2
        // ]);
        
        // Post::create([
        //     'title' => 'Second Article Title',
        //     'slug' => 'second-article-title',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex alias dolore porro atque, a sint incidunt accusamus adipisci in quibusdam sunt veritatis, est sequi ipsum?',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex alias dolore porro atque, a sint incidunt accusamus adipisci in quibusdam sunt veritatis, est sequi ipsum? Praesentium doloremque blanditiis rerum totam eum minus nesciunt enim, esse animi voluptatibus. Eos a, quo laborum dignissimos quae molestias suscipit facilis accusantium quasi doloremque! Est, quisquam velit incidunt consectetur impedit voluptates labore, reprehenderit eius adipisci quod praesentium, blanditiis temporibus laudantium. Vitae, soluta explicabo voluptate laborum quo perferendis, esse facilis rerum sunt magnam alias nihil accusamus dignissimos tempora iure repellat minus vel, animi distinctio!',
        //     'user_id' => 1,
        //     'category_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Third Article Topic',
        //     'slug' => 'third-article-topic',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex alias dolore porro atque, a sint incidunt accusamus adipisci in quibusdam sunt veritatis, est sequi ipsum?',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex alias dolore porro atque, a sint incidunt accusamus adipisci in quibusdam sunt veritatis, est sequi ipsum? Praesentium doloremque blanditiis rerum totam eum minus nesciunt enim, esse animi voluptatibus. Eos a, quo laborum dignissimos quae molestias suscipit facilis accusantium quasi doloremque! Est, quisquam velit incidunt consectetur impedit voluptates labore, reprehenderit eius adipisci quod praesentium, blanditiis temporibus laudantium. Vitae, soluta explicabo voluptate laborum quo perferendis, esse facilis rerum sunt magnam alias nihil accusamus dignissimos tempora iure repellat minus vel, animi distinctio!',
        //     'user_id' => 1,
        //     'category_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Fourth Article',
        //     'slug' => 'fourth-article',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex alias dolore porro atque, a sint incidunt accusamus adipisci in quibusdam sunt veritatis, est sequi ipsum?',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex alias dolore porro atque, a sint incidunt accusamus adipisci in quibusdam sunt veritatis, est sequi ipsum? Praesentium doloremque blanditiis rerum totam eum minus nesciunt enim, esse animi voluptatibus. Eos a, quo laborum dignissimos quae molestias suscipit facilis accusantium quasi doloremque! Est, quisquam velit incidunt consectetur impedit voluptates labore, reprehenderit eius adipisci quod praesentium, blanditiis temporibus laudantium. Vitae, soluta explicabo voluptate laborum quo perferendis, esse facilis rerum sunt magnam alias nihil accusamus dignissimos tempora iure repellat minus vel, animi distinctio!',
        //     'user_id' => 1,
        //     'category_id' => 3
        // ]);

    }
}
