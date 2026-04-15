<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration | Portfolio</title>
    <link rel="stylesheet" href="{{ asset('css/style.css?v=2.0') }}">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Outfit:wght@300;400;600;800&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>
    <style>
        .admin-nav {
            background: rgba(2, 6, 23, 0.5);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-bottom: 1px solid var(--glass-border);
            padding: 15px 0;
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        .admin-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
            position: relative;
        }
        .table-glass {
            width: 100%;
            border-collapse: collapse;
            background: var(--glass-bg);
            border-radius: 8px;
            overflow: hidden;
            border: 1px solid var(--glass-border);
            color: var(--text-primary);
        }
        .table-glass th, .table-glass td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid var(--glass-border);
        }
        .table-glass th {
            background: rgba(255,255,255,0.05);
            color: var(--accent-cyan);
            font-weight: 700;
            text-transform: uppercase;
            font-size: 0.8rem;
            letter-spacing: 1px;
        }
        .action-btns {
            display: flex;
            gap: 10px;
        }
        .btn-sm {
            padding: 6px 12px;
            font-size: 0.75rem;
        }
        .btn-danger {
            background: #ef4444;
            color: white;
        }
        .btn-danger:hover {
            background: #dc2626;
            box-shadow: 0 0 10px rgba(239, 68, 68, 0.3);
        }
    </style>
</head>
<body>
    <div class="bg-overlay"></div>

    <nav class="admin-nav">
        <div class="container" style="display: flex; justify-content: space-between; align-items: center; padding: 0 20px;">
            <div class="logo">ADMIN_SHELL</div>
            <ul style="display: flex; list-style: none; gap: 20px;">
                <li><a href="{{ route('home') }}" target="_blank" style="color: var(--text-secondary); text-decoration: none;">[VIEW_SITE]</a></li>
                <li><a href="{{ route('admin.dashboard') }}" style="color: var(--text-primary); text-decoration: none;">DASHBOARD</a></li>
                <li><a href="{{ route('admin.projects.index') }}" style="color: var(--text-primary); text-decoration: none;">PROJETS</a></li>
                <li><a href="{{ route('admin.skills.index') }}" style="color: var(--text-primary); text-decoration: none;">SKILLS</a></li>
                <li><a href="{{ route('admin.messages.index') }}" style="color: var(--text-primary); text-decoration: none;">MESSAGES</a></li>
            </ul>
        </div>
    </nav>

    <div class="admin-container">
        @if(session('success'))
            <div style="background: rgba(0, 242, 255, 0.1); border: 1px solid var(--accent-cyan); color: var(--accent-cyan); padding: 15px; border-radius: 4px; margin-bottom: 20px;">
                <i data-lucide="check-circle" size="18" style="vertical-align: middle;"></i> SYST_MSG: {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </div>

    <script>
        lucide.createIcons();
    </script>
</body>
</html>
