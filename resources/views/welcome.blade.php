@extends('layouts.app')

@section('hero')
    <div class="hero">
        <h1>Bonjour, je suis MUKUNDA SYNTHYCHE</h1>
        <p>Étudiante en <strong>Bac 2 Génie Logiciel</strong>. Future développeuse passionnée par la création d'interfaces web propres et fonctionnelles.</p>
        <a href="#contact" class="btn">Me contacter</a>
    </div>
@endsection

@section('content')

    <section id="projets" class="container">
        <h2><i data-lucide="layout" style="vertical-align: middle; margin-right: 10px;"></i> Mes Projets</h2>
        
        <div class="project-grid">
            @forelse($projects as $project)
                <div class="project-card">
                    <div class="project-content">
                        <h3>{{ $project->title }}</h3>
                        <p class="tag">{{ $project->tags }}</p>
                        <p><strong><i data-lucide="target" size="16"></i> Défi :</strong> {{ $project->challenge }}</p>
                        <p><strong><i data-lucide="lightbulb" size="16"></i> Solution :</strong> {{ $project->solution }}</p>
                        <p><strong><i data-lucide="check-circle" size="16"></i> Résultat :</strong> {{ $project->result }}</p>
                        <a href="{{ $project->github_link }}" class="btn-outline">
                            <i data-lucide="github" size="18"></i> Voir le code
                        </a>
                    </div>
                </div>
            @empty
                <p style="text-align: center; color: var(--text-muted);">Aucun projet disponible pour le moment.</p>
            @endforelse
        </div>
    </section>

    <section id="competences" class="bg-light">
        <div class="container">
            <h2><i data-lucide="cpu" style="vertical-align: middle; margin-right: 10px;"></i> Compétences</h2>
            <div class="skills-grid">
                @forelse($skills as $skill)
                    <div class="skill-item">{{ $skill->name }}</div>
                @empty
                    <div class="skill-item">Développement logiciel</div>
                    <div class="skill-item">Laravel & PHP</div>
                    <div class="skill-item">UI/UX Design</div>
                @endforelse
            </div>
        </div>
    </section>

    <section id="contact" class="container">
        <h2><i data-lucide="mail" style="vertical-align: middle; margin-right: 10px;"></i> Contactez-moi</h2>
        <p style="text-align: center; color: var(--text-muted); margin-bottom: 40px;">Une question ou une opportunité? n'hésitez pas à nous envoyer un message.</p>
        
        <div class="contact-wrapper">
            <div class="contact-links">
                <p><i data-lucide="send" size="18"></i> Email : <a href="mailto:kapyamukunda@gmail.com">kapyamukunda@gmail.com</a></p>
                <p><i data-lucide="map-marker" size="18"></i> Ville : Lubumbashi, RDC</p>
            </div>

            <form class="contact-form" action="{{ route('contact.store') }}" method="POST">
                @csrf
                @if(session('success'))
                    <div class="alert-success">
                        <i data-lucide="check-circle" style="vertical-align: middle;"></i> Message envoyé avec succès !
                    </div>
                @endif

                @if($errors->any())
                    <div class="alert-error">
                        <i data-lucide="alert-triangle" style="vertical-align: middle;"></i> Veuillez corriger les erreurs.
                    </div>
                @endif

                <div class="input-group">
                    <input type="text" name="nom" placeholder="Votre Nom" required value="{{ old('nom') }}">
                    @error('nom') <small style="color: #ef4444; margin-top: 5px; display: block;">{{ $message }}</small> @enderror
                </div>

                <div class="input-group">
                    <input type="email" name="email" placeholder="Votre Email" required value="{{ old('email') }}">
                    @error('email') <small style="color: #ef4444; margin-top: 5px; display: block;">{{ $message }}</small> @enderror
                </div>

                <div class="input-group">
                    <textarea name="message" placeholder="Votre Message" rows="5" required>{{ old('message') }}</textarea>
                    @error('message') <small style="color: #ef4444; margin-top: 5px; display: block;">{{ $message }}</small> @enderror
                </div>

                <button type="submit" class="btn">Envoyer le message <i data-lucide="arrow-right" size="18"></i></button>
            </form>
        </div>
    </section>

@endsection
