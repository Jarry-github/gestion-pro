<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Gestion des projets</title>
</head>
<body>

    <h1>Liste des projets</h1>

    @if ($projets->count() > 0)

        <ul>
            @foreach ($projets as $projet)
                <li>
                    <strong>{{ $projet->nom }}</strong>
                    - {{ $projet->statut }}

                    <br>
                    {{ $projet->description }}
                    
                    <br>

                    <a href="/projets/{{ $projet->id }}/edit">
                        Modifier
                    </a>
                </li>
            @endforeach
        </ul>

    @else

        <p>Aucun projet enregistré.</p>

    @endif

</body>
</html>