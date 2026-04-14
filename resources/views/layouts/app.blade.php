<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | Étudiante Génie Logiciel</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        .alert-success {
            background-color: #d1fae5;
            color: #065f46;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
            border: 1px solid #10b981;
            text-align: center;
        }
        .alert-error {
            background-color: #fee2e2;
            color: #b91c1c;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
            border: 1px solid #ef4444;
            text-align: center;
        }
    </style>
</head>
<body>

    <header>
        <nav>
            <div class="logo">Mon Portfolio</div>
            <ul>
                <li><a href="#projets">Projets</a></li>
                <li><a href="#competences">Compétences</a></li>
                <li><a href="#contact">Contact</a></li>
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

</body>
</html>
