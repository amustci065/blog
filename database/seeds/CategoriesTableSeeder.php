<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();

        DB::table('categories')->insert([
            [
                'title' => 'Legal News',
                'slug' => 'legal-news'
            ],

            [
                'title' => 'Events',
                'slug' => 'events'
            ],

            [
                'title' => 'Legal Alerts',
                'slug' => 'legal-alert'
            ],

            [
                'title' => 'Investigations',
                'slug' => 'investigations'
            ],

            [
                'title' => 'News',
                'slug' => 'news'
            ],
        ]);

        //update the posts data
            for ($post_id = 1; $post_id <= 10; $post_id++)
            {
                $category_id = rand(1, 5);
                 
                 DB::table('posts')
                 ->where('id', $post_id)
                 ->update(['category_id' => $category_id]);
            }
    }
}
