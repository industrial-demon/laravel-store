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
    public function definition(): array
    {


        $brands = ['Apple', 'Samsung', 'Xiaomi', 'Huawei', 'Sony'];
        $types = ['Мобільний телефон', 'Ноутбук', 'Смарт-годинник', 'Планшет'];
        $models = ['16 Pro Max', 'Ultra 12', 'S20', 'Mate 50'];
        $storages = ['64GB', '128GB', '256GB', '512GB'];
        $colors = ['Black Titanium', 'Silver', 'Blue', 'Red'];

        $brand = $this->faker->randomElement($brands);
        $type = $this->faker->randomElement($types);
        $model = $this->faker->randomElement($models);
        $storage = $this->faker->randomElement($storages);
        $color = $this->faker->randomElement($colors);
        $sku = strtoupper($this->faker->bothify('??###'));

        return [
            'name' => "$type $brand $model $storage $color ($sku)",
            'description' => fake()->text(),
            'price' => $this->faker->randomFloat(2, 5000, 150000),
        ];
    }
}
