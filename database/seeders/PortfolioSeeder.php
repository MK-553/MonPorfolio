<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\Skill;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Création du projet existant
        Project::create([
            'title' => 'Développement d\'une Interface Web Responsive',
            'tags' => 'HTML5 • CSS3 • JavaScript',
            'challenge' => 'Maîtriser le positionnement complexe et l\'adaptabilité mobile.',
            'solution' => 'Utilisation de Flexbox et Grid pour une structure fluide et sémantique.',
            'result' => 'Un site fonctionnel qui valide mes compétences en intégration web.',
            'github_link' => '#'
        ]);

        // Création d'autres projets fictifs pour bien voir l'aspect dynamique
        Project::create([
            'title' => 'Gestionnaire d\'Internat Résidence Mère Alberta',
            'tags' => 'Laravel • PHP • MySQL',
            'challenge' => 'Gérer les inscriptions, capacités et paiements automatiquement.',
            'solution' => 'Application MVC sécurisée avec système d\'alerte et tableau de bord.',
            'result' => 'Productivité administrative augmentée et suivi financier précis.',
            'github_link' => '#'
        ]);

        // Création des compétences
        $skills = [
            'HTML5 / CSS3',
            'JavaScript / Alpine.js',
            'PHP 8 & Laravel',
            'Logique de Programmation',
            'Bases de Données (MySQL/SQLite)',
            'Git & GitHub',
            'Responsive Design',
            'Tailwind CSS'
        ];

        foreach ($skills as $skill) {
            Skill::create(['name' => $skill]);
        }
    }
}
