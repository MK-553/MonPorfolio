@extends('admin.layouts.admin')

@section('content')
    <div style="max-width: 600px; margin: 0 auto;">
        <h2>Modifier la Compétence</h2>

        <form action="{{ route('admin.skills.update', $skill) }}" method="POST" class="contact-form">
            @csrf
            @method('PUT')
            
            <div class="input-group">
                <label style="display: block; margin-bottom: 5px; color: var(--text-muted);">Nom de la Compétence</label>
                <input type="text" name="name" required value="{{ old('name', $skill->name) }}">
                @error('name') <small style="color: #ef4444;">{{ $message }}</small> @enderror
            </div>

            <div class="input-group">
                <label style="display: block; margin-bottom: 5px; color: var(--text-muted);">Catégorie (Optionnel)</label>
                <input type="text" name="category" value="{{ old('category', $skill->category) }}">
            </div>

            <div style="display: flex; gap: 10px; margin-top: 20px;">
                <button type="submit" class="btn">Mettre à jour</button>
                <a href="{{ route('admin.skills.index') }}" class="btn btn-outline" style="text-align: center;">Annuler</a>
            </div>
        </form>
    </div>
@endsection
