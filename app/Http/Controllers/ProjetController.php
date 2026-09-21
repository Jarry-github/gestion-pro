<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projet;

class ProjetController extends Controller
{
    //
    public function index()
	{
	    /*$projets = [
	        'Gestion commerciale',
	        'Application RH',
	        'API de paiement',
	        'Application de gestion de projets'
	    ];*/

	    //$projets = Projet::all();

	    $projets = [
	        (object) [
	            'nom' => 'Réquisition',
	            'description' => ' Backoffice d’extraction et de consultation de données et monitoring.',
	            'statut' => 'Terminé',
	            'techo1'  => 'PHP',
	            'techo2'  => 'CodeIgniter MVC',
	            'techo3'  => 'MySQL'
	        ],
	        (object) [
	            'nom' => 'MIS UNICEF - GUICHET UNIQUE',
	            'description' => 'Plateforme web de mise à jour et de statistiques des données collectées.',
	            'statut' => 'Terminé',
	            'techo1'  => 'PHP',
	            'techo2'  => 'CodeIgniter MVC',
	            'techo3'  => 'MySQL'
	        ],
	        (object) [
	            'nom' => 'MIS FID - Fonds d\'Intervention pour le Développement',
	            'description' => 'Collecte d’enquêtes, administration des utilisateurs et gestion de paiement des ménages.',
	            'statut' => 'Terminé',
	            'techo1'  => 'PHP',
	            'techo2'  => 'CodeIgniter MVC',
	            'techo3'  => 'MySQL'
	        ]
	    ];

	    return view('projets', compact('projets'));
	}

	//Ouvre le formulaire de création
	public function create()
	{
	    return view('projets.create');
	}

	public function store(Request $request)
	{
	    $request->validate([
	        'nom' => 'required|max:255',
	        'description' => 'nullable',
	        'statut' => 'required',
	    ]);

	    Projet::create([
	        'nom' => $request->nom,
	        'description' => $request->description,
	        'statut' => $request->statut,
	    ]);

	    return redirect('/projets');
	}


	public function edit(Projet $projet)
	{
	    return view('projets.edit', compact('projet'));
	}

	public function update(Request $request, Projet $projet)
	{
	    $request->validate([
	        'nom' => 'required|max:255',
	        'description' => 'nullable',
	        'statut' => 'required',
	    ]);

	    $projet->update([
	        'nom' => $request->nom,
	        'description' => $request->description,
	        'statut' => $request->statut,
	    ]);

	    return redirect('/projets');
	}
}
