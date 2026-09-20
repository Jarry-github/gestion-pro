<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Nouveau projet</title>
</head>
<body>

    <h1>Créer un projet</h1>

@if ($errors->any())
    <div>
        <strong>Veuillez corriger les erreurs suivantes :</strong>

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form method="POST" action="/projets">

        @csrf

        <div>
            <label>Nom du projet</label>
            <input type="text" name="nom" value="{{ old('nom') }}">
        </div>

        <br>

        <div>
            <label>Description</label>
            <textarea name="description">{{ old('description') }}</textarea>
        </div>

        <br>

        <div>
            <label>Statut</label>
            <select name="statut">
                <option value="En cours" {{ old('statut') == 'En cours' ? 'selected' : '' }}>
                    En cours
                </option>

                <option value="Terminé" {{ old('statut') == 'Terminé' ? 'selected' : '' }}>
                    Terminé
                </option>

                <option value="En attente" {{ old('statut') == 'En attente' ? 'selected' : '' }}>
                    En attente
                </option>
            </select>
        </div>

        <br>

        <button type="submit">Enregistrer</button>

    </form>

    <br>

    <a href="/projets">Retour à la liste</a>

</body>
</html>