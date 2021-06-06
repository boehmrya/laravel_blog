<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
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
          'excerpt' => 'Lorem ipsum dolar ist amet.',
          'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sed ante lectus. Aliquam in scelerisque nulla, vitae tristique eros. Sed tincidunt, elit at auctor cursus, risus odio rutrum nisi, nec facilisis enim velit in velit.'
        ])
    }
}
