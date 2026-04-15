@extends('admin.layouts.admin')

@section('content')
    <div style="margin-bottom: 30px;">
        <h2>Messages Reçus</h2>
    </div>

    @if($messages->isEmpty())
        <div class="project-card" style="text-align: center; padding: 40px;">
            <p style="color: var(--text-muted);">Aucun message reçu pour le moment.</p>
        </div>
    @else
        <div style="display: flex; flex-direction: column; gap: 20px;">
            @foreach($messages as $message)
                <div class="project-card">
                    <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 15px;">
                        <div>
                            <h3 style="margin: 0; color: var(--text-main);">{{ $message->nom }}</h3>
                            <p style="margin: 5px 0; color: var(--primary);">{{ $message->email }}</p>
                            <small style="color: var(--text-muted);">Envoyé le {{ $message->created_at->format('d/m/Y à H:i') }}</small>
                        </div>
                        <form action="{{ route('admin.messages.destroy', $message) }}" method="POST" onsubmit="return confirm('Supprimer ce message ?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger"><i data-lucide="trash-2" size="16"></i></button>
                        </form>
                    </div>
                    <div style="background: rgba(0,0,0,0.2); padding: 15px; border-radius: 8px; border: 1px solid var(--border-glass);">
                        <p style="white-space: pre-wrap; margin: 0;">{{ $message->message }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
@endsection
