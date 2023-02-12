@extends('app')

@section('title', 'Creation des personnes')

@section('content')
    <h1>Ajouter une personne</h1>

    <form action="{{ route('nom.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nom">Nom :</label>
            <input type="text" name="nom" id="nom" class="form-control @error('nom') is-invalid @enderror" value="{{ old('nom') }}" required maxlength="30">
            @error('nom')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="prenom">Prénom :</label>
            <input type="text" name="prenom" id="prenom" class="form-control @error('prenom') is-invalid @enderror" value="{{ old('prenom') }}" required maxlength="30">
            @error('prenom')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="age">Age :</label>
            <input type="number" name="age" id="age" class="form-control @error('age') is-invalid @enderror" value="{{ old('age') }}" required min="0" max="255">
            @error('age')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
        <a href="{{ route('nom.index') }}" class="btn btn-secondary">Retour</a>
    </form>
    <style>
        form {
            margin-top: 20px;
            max-width: 500px;
        }
        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="number"] {
            border: 1px solid #ddd;
            border-radius: 3px;
            padding: 8px;
            width: 100%;
        }
        input[type="text"]:focus,
        input[type="number"]:focus {
            outline: none;
            border-color: #007bff;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .invalid-feedback {
            color: red;
            font-size: 14px;
            margin-top: 5px;
        }
        .btn {
            border-radius: 3px;
            padding: 8px 20px;
            text-decoration: none;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
            color: #fff;
        }
        .btn-primary:hover {
            background-color: #0069d9;
            color: #fff;
        }
        .btn-secondary {
            background-color: #6c757d;
            border: none;
            color: #fff;
            margin-left: 10px;
        }
        .btn-secondary:hover {
            background-color: #5a6268;
            color: #fff;
        }
    </style>
@endsection