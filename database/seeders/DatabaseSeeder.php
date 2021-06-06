<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

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
        Post::truncate();
        Category::truncate();

        $user = User::factory()->create();

        $personal = Category::create([
          'name' => 'Personal',
          'slug' => 'personal'
        ]);

        $family = Category::create([
          'name' => 'Family',
          'slug' => 'family'
        ]);

        $work = Category::create([
          'name' => 'Work',
          'slug' => 'work'
        ]);

        Post::create([
          'user_id' => $user->id,
          'category_id' => $family->id,
          'title' => 'My Family Post',
          'slug' => 'my-first-post',
          'excerpt' => '<p>Lorem ipsum dolar ist amet.</p>',
          'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sed ante lectus. Aliquam in scelerisque nulla, vitae tristique eros. Sed tincidunt, elit at auctor cursus, risus odio rutrum nisi, nec facilisis enim velit in velit.</p>'
        ]);

        Post::create([
          'user_id' => $user->id,
          'category_id' => $work->id,
          'title' => 'My Work Post',
          'slug' => 'my-work-post',
          'excerpt' => '<p>Lorem ipsum dolar ist amet.</p>',
          'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sed ante lectus. Aliquam in scelerisque nulla, vitae tristique eros. Sed tincidunt, elit at auctor cursus, risus odio rutrum nisi, nec facilisis enim velit in velit.</p>'
        ]);
    }
}
