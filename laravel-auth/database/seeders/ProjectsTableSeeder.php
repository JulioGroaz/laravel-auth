<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $projectsData = [
            [
                'title' => 'Progetto 1',
                'description' => 'Descrizione del Progetto 1',
                'url' => 'https://example.com/progetto1',
                'image' => 'https://example.com/image1.jpg',
                'technologies' => 'Laravel, Vue.js, MySQL',
            ],
            [
                'title' => 'Progetto 2',
                'description' => 'Descrizione del Progetto 2',
                'url' => 'https://example.com/progetto2',
                'image' => 'https://example.com/image2.jpg',
                'technologies' => 'React, Node.js, PostgreSQL',
            ],
            [
                'title' => 'Progetto 3',
                'description' => 'Descrizione del Progetto 3',
                'url' => 'https://example.com/progetto3',
                'image' => 'https://example.com/image3.jpg',
                'technologies' => 'Angular, Spring Boot, MongoDB',
            ],
            // Aggiungi altri progetti come necessario
        ];




        foreach($projectsData as $projectData) {
            $newProject = new Project();
            $newProject->title = $projectData['title'];
            $newProject->description = $projectData['description'];
            $newProject->url = $projectData['url'];
            $newProject->image = $projectData['image'];
            $newProject->technologies = $projectData['technologies'];
            $newProject->save();
        }
    }
}

