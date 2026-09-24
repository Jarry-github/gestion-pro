<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PortfolioController extends Controller
{
    public function index(): View
    {
        $projets = [
            [
                'nom' => 'eRéquisition',
                'description' => 'Backoffice d’extraction et de consultation de données et monitoring.',
                'technologies' => ['PHP', 'CodeIgniter 2', 'MySQL', 'JavaScript'],
                'role' => 'Développeur Web',
            ],

            [
                'nom' => 'MIS UNICEF - GUICHET UNIQUE',
                'description' => 'Plateforme web de mise à jour et de statistiques des données collectées.',
                'technologies' => ['PHP', 'CodeIgniter 4', 'MySQL', 'JavaScript'],
                'role' => 'Développeur Web',
            ],

            [
                'nom' => 'MIS FID - Fonds d\'Intervention pour le Développement',
                'description' => 'Collecte d’enquêtes, administration des utilisateurs et gestion de paiement des ménages.',
                'technologies' => ['PHP', 'CodeIgniter 2', 'MySQL', 'API REST'],
                'role' => 'Chef de projet & Développeur Web',
            ],

            [
                'nom' => 'DOUANE MALAGASY',
                'description' => 'Développement d’applications permettant la collecte, le traitement et la consultation de données.',
                'technologies' => ['PHP', 'PostgreSQL', 'JavaScript'],
                'role' => 'Chef de projet & Développeur Web',
            ],
        ];

        $competences = [
            'PHP',
            'CodeIgniter 2 & 4',
            'Laravel',
            'MySQL',
            'PostgreSQL',
            'JavaScript',
            'API REST',
            'API JSON',
            'SOAP',
            'Analyse & conception',
            'Gestion de projet',
        ];

        return view('portfolio.index', [
            'projets' => $projets,
            'competences' => $competences,
        ]);
    }
}