@extends('app')

@section('title', 'Modifications des personnes')

@section('content')
    <h1>Modifier une personne</h1>

    <form action="{{ route('nom.update', $nom) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nom">Nom :</label>
            <input type="text" name="nom" id="nom" class="form-control @error('nom') is-invalid @enderror" value="{{ old('nom', $nom->nom) }}" required maxlength="30">
            @error('nom')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="prenom">Prénom :</label>
            <input type="text" name="prenom" id="prenom" class="form-control @error('prenom') is-invalid @enderror" value="{{ old('prenom', $nom->prenom) }}" required maxlength="30">
            @error('prenom')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="age">Age :</label>
            <input type="number" name="age" id="age" class="form-control @error('age') is-invalid @enderror" value="{{ old('age', $nom->age) }}" required min="0" max="255">
            @error('age')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Modifier</button>
        <a href="{{ route('nom.index') }}" class="btn btn-secondary">Retour</a>
    </form>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 16px;
            line-height: 1.5;
            background-color: #f9f9f9;
            color: #333;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
        }
        h1 {
            font-size: 32px;
            margin: 0;
        }
        main {
            padding: 20px;
        }
        form {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="number"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
            box-sizing: border-box;
            margin-bottom: 10px;
        }
        input[type="submit"],
        button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #333;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }
        input[type="submit"]:hover,
        button:hover {
            background-color: #555;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .invalid-feedback {
            color: red;
            margin-top: 5px;
        }
    </style>
@endsection