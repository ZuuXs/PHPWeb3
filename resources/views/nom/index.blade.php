@extends('app')

@section('title', 'Liste des personnes')

@section('content')
    <h1>Liste des personnes</h1>

    @if (count($noms) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Age</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($noms as $nom)
                    <tr>
                        <td>{{ $nom->nom }}</td>
                        <td>{{ $nom->prenom }}</td>
                        <td>{{ $nom->age }}</td>
                        <td>
                            <a href="{{ route('nom.edit', $nom) }}" class="btn btn-primary">Modifier</a>
                            <form action="{{ route('nom.destroy', $nom) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette personne ?')">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Aucune personne trouvée.</p>
    @endif

    <a href="{{ route('nom.create') }}" class="btn btn-success">Ajouter une personne</a>
@endsection