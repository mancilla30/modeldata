<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre'=>fake()->name(),
            'descripcion_corta'=>fake()->sentence(),
            'descripcion'=>fake()->paragraph(),
            'precio'=>fake()->numberBetween(1,125),
        ];
    }

    // $this->faker->name()           // Nombres
    // $this->faker->email()          // Correos
    // $this->faker->phoneNumber()    // Teléfonos
    // $this->faker->address()        // Direcciones
    // $this->faker->text()           // Texto aleatorio
    // $this->faker->date()           // Fechas
    // $this->faker->numberBetween()  // Números
}
