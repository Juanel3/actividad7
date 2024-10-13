<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Curso;

class CoursesTableSeeder extends Seeder
{
    public function run()
    {
        Curso::factory()->count(100)->create();
    }
}

