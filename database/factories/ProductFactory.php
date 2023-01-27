<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'Name'=> fake()->name(),
            'slug' =>fake()->slug(),
            'description'=>fake()->paragraph(),
            'price'=>fake()->randomFloat(2,0,10000),
            'thumbnail'=>fake()->imageUrl($width = 129, $height = 150),
            'image01_path'=> fake()->imageUrl($width = 360, $height = 320),
            'image02_path'=> fake()->imageUrl($width = 360, $height = 320),
            'image03_path'=> fake()->imageUrl($width = 360, $height = 320),
            'image04_path'=> fake()->imageUrl($width = 360, $height = 320),
            'image05_path'=> fake()->imageUrl($width = 360, $height = 320),
            'image06_path'=> fake()->imageUrl($width = 360, $height = 320),
            'details'=>fake()->text(),
            'type_id'=>fake()->numberBetween(0,10),
            'starred'=>fake()->numberBetween(0,100),

            'created_at' => \Carbon\Carbon::now(), 
            'updated_at' => \Carbon\Carbon::now(), 
        ];
    }
}
