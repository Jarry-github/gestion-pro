<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier un projet</title>
</head>
<body>

    <h1>Modifier le projet</h1>

    <form method="POST" action="/projets/{{ $projet->id }}">

        @csrf
        @method('PUT')

        <div>
            <label>Nom du projet</label>
            <input
                type="text"
                name="nom"
                value="{{ old('nom', $projet->nom) }}"
            >
        </div>

        <br>

        <div>
            <label>Description</label>
            <textarea name="description">{{ old('description', $projet->description) }}</textarea>
        </div>

        <br>

        <div>
            <label>Statut</label>

            <select name="statut">

                <option value="En cours"
                    {{ old('statut', $projet->statut) == 'En cours' ? 'selected' : '' }}>
                    En cours
                </option>

                <option value="Terminé"
                    {{ old('statut', $projet->statut) == 'Terminé' ? 'selected' : '' }}>
                    Terminé
                </option>

                <option value="En attente"
                    {{ old('statut', $projet->statut) == 'En attente' ? 'selected' : '' }}>
                    En attente
                </option>

            </select>
        </div>

        <br>

        <button type="submit">Enregistrer les modifications</button>

    </form>

    <br>

    <a href="/projets">Retour à la liste</a>

</body>
</html>