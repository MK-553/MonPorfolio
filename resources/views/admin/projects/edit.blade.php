@extends('admin.layouts.admin')

@section('content')
    <div style="max-width: 800px; margin: 0 auto;">
        <h2>Modifier le Projet</h2>

        <form action="{{ route('admin.projects.update', $project) }}" method="POST" enctype="multipart/form-data" class="contact-form">
            @csrf
            @method('PUT')
            
            <div class="input-group">
                <label style="display: block; margin-bottom: 5px; color: var(--text-muted);">Titre du Projet</label>
                <input type="text" name="title" required value="{{ old('title', $project->title) }}">
                @error('title') <small style="color: #ef4444;">{{ $message }}</small> @enderror
            </div>

            <div class="input-group">
                <label style="display: block; margin-bottom: 5px; color: var(--text-muted);">Tags</label>
                <input type="text" name="tags" value="{{ old('tags', $project->tags) }}">
            </div>

            <div class="input-group">
                <label style="display: block; margin-bottom: 5px; color: var(--text-muted);">GitHub Link</label>
                <input type="url" name="github_link" value="{{ old('github_link', $project->github_link) }}">
            </div>

            <div class="input-group">
                <label style="display: block; margin-bottom: 5px; color: var(--text-muted);">Image actuelle</label>
                @if($project->image)
                    <img src="{{ asset('storage/' . $project->image) }}" alt="" style="width: 150px; border-radius: 10px; margin-bottom: 10px; display: block;">
                @endif
                <input type="file" name="image" accept="image/*">
                @error('image') <small style="color: #ef4444;">{{ $message }}</small> @enderror
            </div>

            <div class="input-group">
                <label style="display: block; margin-bottom: 5px; color: var(--text-muted);">Défi</label>
                <textarea name="challenge" rows="3">{{ old('challenge', $project->challenge) }}</textarea>
            </div>

            <div class="input-group">
                <label style="display: block; margin-bottom: 5px; color: var(--text-muted);">Solution</label>
                <textarea name="solution" rows="3">{{ old('solution', $project->solution) }}</textarea>
            </div>

            <div class="input-group">
                <label style="display: block; margin-bottom: 5px; color: var(--text-muted);">Résultat</label>
                <textarea name="result" rows="3">{{ old('result', $project->result) }}</textarea>
            </div>

            <div style="display: flex; gap: 10px; margin-top: 20px;">
                <button type="submit" class="btn">Mettre à jour</button>
                <a href="{{ route('admin.projects.index') }}" class="btn btn-outline" style="text-align: center;">Annuler</a>
            </div>
        </form>
    </div>
@endsection
