@extends('admin.layouts.admin')

@section('content')
    <div style="max-width: 800px; margin: 0 auto;">
        <h2>Ajouter un Projet</h2>

        <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data" class="contact-form">
            @csrf
            
            <div class="input-group">
                <label style="display: block; margin-bottom: 5px; color: var(--text-muted);">Titre du Projet</label>
                <input type="text" name="title" placeholder="Ex: Boutique E-commerce" required value="{{ old('title') }}">
                @error('title') <small style="color: #ef4444;">{{ $message }}</small> @enderror
            </div>

            <div class="input-group">
                <label style="display: block; margin-bottom: 5px; color: var(--text-muted);">Tags (séparés par des virgules)</label>
                <input type="text" name="tags" placeholder="Ex: PHP, Laravel, MySQL" value="{{ old('tags') }}">
            </div>

            <div class="input-group">
                <label style="display: block; margin-bottom: 5px; color: var(--text-muted);">GitHub Link</label>
                <input type="url" name="github_link" placeholder="https://github.com/..." value="{{ old('github_link') }}">
            </div>

            <div class="input-group">
                <label style="display: block; margin-bottom: 5px; color: var(--text-muted);">Image du Projet</label>
                <input type="file" name="image" accept="image/*">
                @error('image') <small style="color: #ef4444;">{{ $message }}</small> @enderror
            </div>

            <div class="input-group">
                <label style="display: block; margin-bottom: 5px; color: var(--text-muted);">Défi</label>
                <textarea name="challenge" placeholder="Quel était le défi ?" rows="3">{{ old('challenge') }}</textarea>
            </div>

            <div class="input-group">
                <label style="display: block; margin-bottom: 5px; color: var(--text-muted);">Solution</label>
                <textarea name="solution" placeholder="Quelle a été votre solution ?" rows="3">{{ old('solution') }}</textarea>
            </div>

            <div class="input-group">
                <label style="display: block; margin-bottom: 5px; color: var(--text-muted);">Résultat</label>
                <textarea name="result" placeholder="Quel a été le résultat ?" rows="3">{{ old('result') }}</textarea>
            </div>

            <div style="display: flex; gap: 10px; margin-top: 20px;">
                <button type="submit" class="btn">Enregistrer le projet</button>
                <a href="{{ route('admin.projects.index') }}" class="btn btn-outline" style="text-align: center;">Annuler</a>
            </div>
        </form>
    </div>
@endsection
