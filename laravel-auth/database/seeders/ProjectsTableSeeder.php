<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::create([
            'title' => 'Progetto 1',
            'description' => 'Descrizione del Progetto 1',
            'url' => 'https://example.com/progetto1',
            'image' => 'https://example.com/image1.jpg',
            'technologies' => 'Laravel, Vue.js, MySQL',
        ]);

        Project::create([
            'title' => 'Progetto 2',
            'description' => 'Descrizione del Progetto 2',
            'url' => 'https://example.com/progetto2',
            'image' => 'https://example.com/image2.jpg',
            'technologies' => 'React, Node.js, PostgreSQL',
        ]);

        // Aggiungi altri progetti come necessario
    }
}

