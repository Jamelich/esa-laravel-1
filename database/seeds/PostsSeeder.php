<?php

use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 50; $i++) {
            DB::table('posts')->insert([
                'category_id' => rand(1, 20),
                'title' => 'Post-' . $i,
                'slug' => 'post_' . $i,
                'description' => 'description of Post-' . $i,
                'text' => '<p>You may execute the db:seed Artisan command to seed your database. By default, the db:seed command runs the Database\Seeders\DatabaseSeeder class, which may in turn invoke other seed classes. However, you may use the --class option to specify a specific seeder class to run individually:' . $i . '</p>',
            ]);
        }
    }
}
