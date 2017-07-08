<?php

use Illuminate\Database\Seeder;
use App\Recipes;

class RecipesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        
        for($i = 0; $i < 100; $i++){
            $recipe = new Recipes();
            $recipe->title = $faker->company;
            $recipe->description = $faker->text(200);
            $recipe->save();
        }
        
    }
}
