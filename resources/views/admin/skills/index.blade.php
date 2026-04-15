@extends('admin.layouts.admin')

@section('content')
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px;">
        <h2>Gestion des Compétences</h2>
        <a href="{{ route('admin.skills.create') }}" class="btn">Nouvelle Compétence</a>
    </div>

    <table class="table-glass">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Catégorie</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($skills as $skill)
                <tr>
                    <td>{{ $skill->name }}</td>
                    <td>{{ $skill->category ?? 'N/A' }}</td>
                    <td>
                        <div class="action-btns">
                            <a href="{{ route('admin.skills.edit', $skill) }}" class="btn btn-sm btn-outline">Editer</a>
                            <form action="{{ route('admin.skills.destroy', $skill) }}" method="POST" onsubmit="return confirm('Supprimer cette compétence ?')">
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
