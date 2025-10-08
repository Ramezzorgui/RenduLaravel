<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        return [
            // conforme au PDF mais plus cohérent :
            'name' => $this->faker->words(2, true),            // 2 mots concaténés
            'description' => $this->faker->text(200),          // jusqu'à 200 caractères
            'price' => $this->faker->randomFloat(2, 1, 999),   // float 2 décimales
            'stock' => $this->faker->numberBetween(0, 999),    // entier
        ];
    }
}
