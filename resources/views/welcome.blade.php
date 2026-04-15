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
        <h2><i data-lucide="terminal" style="vertical-align: middle; margin-right: 15px;"></i> Projets_Réalisés</h2>
        
        <div class="project-grid">
            @forelse($projects as $project)
                <div class="project-card">
                    <span class="tag">0x{{ dechex($project->id) }} // {{ $project->tags }}</span>
                    @if($project->image)
                        <div class="project-image" style="margin-bottom: 24px; border-radius: 4px; overflow: hidden; height: 200px; border: 1px solid var(--glass-border);">
                            <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" style="width: 100%; height: 100%; object-fit: cover; opacity: 0.8;">
                        </div>
                    @endif
                    <div class="project-content">
                        <h3>{{ $project->title }}</h3>
                        <div style="margin-top: 20px; display: grid; gap: 12px; color: var(--text-secondary); font-size: 0.9rem;">
                            <p><strong style="color: var(--accent-cyan);">[SRC]</strong> {{ $project->challenge }}</p>
                            <p><strong style="color: var(--accent-cyan);">[SOL]</strong> {{ $project->solution }}</p>
                            <p><strong style="color: var(--accent-cyan);">[OUT]</strong> {{ $project->result }}</p>
                        </div>
                        <a href="{{ $project->github_link }}" class="btn-outline" style="margin-top: 30px; width: 100%; justify-content: center;">
                            <i data-lucide="github" size="18"></i> DEPLOY_CODE
                        </a>
                    </div>
                </div>
            @empty
                <p style="text-align: center; color: var(--text-secondary); grid-column: 1/-1;">// NULL_DATA: Aucun projet disponible.</p>
            @endforelse
        </div>
    </section>

    <section id="competences" class="container">
        <h2><i data-lucide="cpu" style="vertical-align: middle; margin-right: 15px;"></i> Tech_Stack</h2>
        <div class="skills-grid">
            @forelse($skills as $skill)
                <div class="skill-item">
                    <i data-lucide="code-2" size="20" style="margin-bottom: 10px; color: var(--accent-purple);"></i><br>
                    {{ $skill->name }}
                </div>
            @empty
                <div class="skill-item">// Dev_Software</div>
                <div class="skill-item">// Laravel_PHP</div>
                <div class="skill-item">// UI/UX_Arch</div>
            @endforelse
        </div>
    </section>

    <section id="contact" class="container">
        <h2><i data-lucide="message-square" style="vertical-align: middle; margin-right: 15px;"></i> Root_Contact</h2>
        <p style="text-align: center; color: var(--text-secondary); margin-bottom: 50px;">// Établir une connexion sécurisée...</p>
        
        <div class="contact-wrapper">
            <div class="contact-links" style="background: var(--glass-bg); padding: 40px; border-radius: 8px; border: 1px solid var(--glass-border);">
                <p style="color: #fff; font-weight: 700; margin-bottom: 30px;">[IDENT_INFO]</p>
                <p><i data-lucide="mail" size="18" style="color: var(--accent-cyan);"></i> <a href="mailto:kapyamukunda@gmail.com">kapyamukunda@gmail.com</a></p>
                <p><i data-lucide="map-pin" size="18" style="color: var(--accent-cyan);"></i> Lubumbashi, RDC</p>
            </div>

            <form class="contact-form" action="{{ route('contact.store') }}" method="POST">
                @csrf
                @if(session('success'))
                    <div style="background: rgba(0, 242, 255, 0.1); border: 1px solid var(--accent-cyan); color: var(--accent-cyan); padding: 20px; border-radius: 4px; margin-bottom: 20px;">
                        <i data-lucide="check-circle" size="18" style="vertical-align: middle;"></i> CONNECTION_SUCCESS: Message transmis.
                    </div>
                @endif

                <input type="text" name="nom" placeholder=">_Nom" required value="{{ old('nom') }}">
                <input type="email" name="email" placeholder=">_Email" required value="{{ old('email') }}">
                <textarea name="message" placeholder=">_Message_Content..." rows="5" required>{{ old('message') }}</textarea>

                <button type="submit" class="btn">INITIALIZE_SEND <i data-lucide="send" size="18"></i></button>
            </form>
        </div>
    </section>

@endsection
