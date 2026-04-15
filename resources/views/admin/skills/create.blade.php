@extends('admin.layouts.admin')

@section('content')
    <div style="max-width: 600px; margin: 0 auto;">
        <h2>Ajouter une Compétence</h2>

        <form action="{{ route('admin.skills.store') }}" method="POST" class="contact-form">
            @csrf
            
            <div class="input-group">
                <label style="display: block; margin-bottom: 5px; color: var(--text-muted);">Nom de la Compétence</label>
                <input type="text" name="name" placeholder="Ex: PHP / Laravel" required value="{{ old('name') }}">
                @error('name') <small style="color: #ef4444;">{{ $message }}</small> @enderror
            </div>

            <div class="input-group">
                <label style="display: block; margin-bottom: 5px; color: var(--text-muted);">Catégorie (Optionnel)</label>
                <input type="text" name="category" placeholder="Ex: Backend" value="{{ old('category') }}">
            </div>

            <div style="display: flex; gap: 10px; margin-top: 20px;">
                <button type="submit" class="btn">Ajouter</button>
                <a href="{{ route('admin.skills.index') }}" class="btn btn-outline" style="text-align: center;">Annuler</a>
            </div>
        </form>
    </div>
@endsection
