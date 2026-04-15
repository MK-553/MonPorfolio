@extends('admin.layouts.admin')

@section('content')
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px; margin-top: 20px;">
        <div class="project-card" style="text-align: center; padding: 30px;">
            <i data-lucide="layers" size="32" style="color: var(--primary); margin-bottom: 10px;"></i>
            <h3>Projets</h3>
            <p style="font-size: 2rem; font-weight: 800; margin: 10px 0;">{{ \App\Models\Project::count() }}</p>
            <a href="{{ route('admin.projects.index') }}" class="btn btn-sm">Gérer</a>
        </div>

        <div class="project-card" style="text-align: center; padding: 30px;">
            <i data-lucide="cpu" size="32" style="color: var(--primary); margin-bottom: 10px;"></i>
            <h3>Compétences</h3>
            <p style="font-size: 2rem; font-weight: 800; margin: 10px 0;">{{ \App\Models\Skill::count() }}</p>
            <a href="{{ route('admin.skills.index') }}" class="btn btn-sm">Gérer</a>
        </div>

        <div class="project-card" style="text-align: center; padding: 30px;">
            <i data-lucide="mail" size="32" style="color: var(--primary); margin-bottom: 10px;"></i>
            <h3>Messages</h3>
            <p style="font-size: 2rem; font-weight: 800; margin: 10px 0;">{{ \App\Models\Contact::count() }}</p>
            <a href="{{ route('admin.messages.index') }}" class="btn btn-sm">Lire</a>
        </div>
    </div>
@endsection
