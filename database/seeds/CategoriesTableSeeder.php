<?php

use App\Models\Category;
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
        Category::create([
            'name' => 'Root',
            'slug' => 'root',
            'description' => 'This is the root category, don\'t delete this one',
            'parent_id' => null,
            'is_menu' => 0,
        ]);
        factory(Category::class, 10)->create();
    }
}
