<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 20; $i++) {
            DB::table('category')->insert([
                'title' => 'Category' . $i,
                'slug' => 'category' . $i,
            ]);
        }
    }
}
