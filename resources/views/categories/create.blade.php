@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Ajouter une catégorie</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $err)
                    <li>{{ $err }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nom de la catégorie</label>
            <input type="text" name="name" class="form-control" required maxlength="20">
        </div>

        <button type="submit" class="btn btn-success">Enregistrer</button>
        <a href="{{ route('categories.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection
