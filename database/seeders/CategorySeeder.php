<?php

namespace Database\Seeders;

use App\Models\Category;
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
        $category = new Category();
        $category->name = "Thời trang";
        $category->parent_id = 0;
        $category->save();

        $category = new Category();
        $category->name = "Điện máy";
        $category->parent_id = 0;
        $category->save();

        $category = new Category();
        $category->name = "Gia dụng";
        $category->parent_id = 0;
        $category->save();

        Category::factory(10)->create();
    }
}
