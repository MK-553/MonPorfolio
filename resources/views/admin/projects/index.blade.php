@extends('admin.layouts.admin')

@section('content')
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px;">
        <h2>Gestion des Projets</h2>
        <a href="{{ route('admin.projects.create') }}" class="btn">Nouveau Projet</a>
    </div>

    <table class="table-glass">
        <thead>
            <tr>
                <th>Image</th>
                <th>Titre</th>
                <th>Tags</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($projects as $project)
                <tr>
                    <td>
                        @if($project->image)
                            <img src="{{ asset('storage/' . $project->image) }}" alt="" style="width: 50px; height: 50px; object-fit: cover; border-radius: 5px;">
                        @else
                            <span style="color: var(--text-muted);">No image</span>
                        @endif
                    </td>
                    <td>{{ $project->title }}</td>
                    <td><span class="tag">{{ $project->tags }}</span></td>
                    <td>
                        <div class="action-btns">
                            <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-sm btn-outline">Editer</a>
                            <form action="{{ route('admin.projects.destroy', $project) }}" method="POST" onsubmit="return confirm('Supprimer ce projet ?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Supprimer</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
