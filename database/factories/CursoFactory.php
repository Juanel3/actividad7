<?php

namespace Database\Factories;
use App\Models\Curso;
use App\Models\Kit;
use Illuminate\Database\Eloquent\Factories\Factory;

class CursoFactory extends Factory
{
    protected $model = Curso::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'cover_image' => $this->faker->imageUrl,
            'content' => $this->faker->paragraph,
            'robotics_kit' => Kit::inRandomOrder()->first()->id, // asignar un kit aleatorio
        ];
    }
}

