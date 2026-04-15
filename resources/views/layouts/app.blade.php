<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | Étudiante Génie Logiciel</title>
    <link rel="stylesheet" href="{{ asset('css/style.css?v=2.0') }}">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Outfit:wght@300;400;600;800&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body>
    <div class="bg-overlay"></div>

    <header>
        <nav>
            <div class="logo">Mon Portfolio</div>
            <ul>
                <li><a href="#projets">Projets</a></li>
                <li><a href="#competences">Compétences</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="{{ route('admin.dashboard') }}" class="btn-sm"><i data-lucide="settings" size="14"></i> Admin</a></li>
            </ul>
        </nav>
        
        @yield('hero')
        
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2026 - Conçu avec persévérance par une future ingénieure.</p>
    </footer>

    <script>
        lucide.createIcons();
    </script>
</body>
</html>
