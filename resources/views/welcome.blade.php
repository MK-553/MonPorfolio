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
        <h2>Mes Projets</h2>
        
        <div class="project-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px;">
            @forelse($projects as $project)
                <div class="project-card" style="margin-bottom: 0;">
                    <div class="project-content">
                        <h3>{{ $project->title }}</h3>
                        <p class="tag">{{ $project->tags }}</p>
                        <p><strong>Défi :</strong> {{ $project->challenge }}</p>
                        <p><strong>Solution :</strong> {{ $project->solution }}</p>
                        <p><strong>Résultat :</strong> {{ $project->result }}</p>
                        <a href="{{ $project->github_link }}" class="btn-outline">Voir le code (GitHub)</a>
                    </div>
                </div>
            @empty
                <p>Aucun projet disponible pour le moment.</p>
            @endforelse
        </div>
    </section>

    <section id="competences" class="bg-light">
        <div class="container">
            <h2>Compétences Techniques</h2>
            <div class="skills-grid">
                @forelse($skills as $skill)
                    <div class="skill-item">{{ $skill->name }}</div>
                @empty
                    <div class="skill-item">Développement logiciel</div>
                @endforelse
            </div>
        </div>
    </section>

    <section id="contact" class="container">
        <h2>Contactez-moi</h2>
        <p>Une question ou une opportunité? n'hésitez pas à nous envoyer un message.</p>
        <div class="contact-links">
            <p>📧 Email : <a href="mailto:kapyamukunda@gmail.com">kapyamukunda@gmail.com</a></p>
            <p>📍 Ville : Lubumbashi, RDC</p>
        </div>

        @if(session('success') || request('sent'))
            <div class="alert-success">
                Message envoyé avec succès !
            </div>
        @endif

        @if($errors->any())
            <div class="alert-error">
                Veuillez corriger les erreurs dans le formulaire.
            </div>
        @endif

        <form class="contact-form" action="{{ route('contact.store') }}" method="POST">
            @csrf
            <input type="text" name="nom" placeholder="Votre Nom" required value="{{ old('nom') }}">
            @error('nom') <small style="color: red;">{{ $message }}</small> @enderror

            <input type="email" name="email" placeholder="Votre Email" required value="{{ old('email') }}">
            @error('email') <small style="color: red;">{{ $message }}</small> @enderror

            <textarea name="message" placeholder="Votre Message" rows="5" required>{{ old('message') }}</textarea>
            @error('message') <small style="color: red;">{{ $message }}</small> @enderror

            <button type="submit" class="btn">Envoyer le message</button>
        </form>
    </section>

@endsection
