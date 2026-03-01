<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') - Sistema OS</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><strong>Logo Empresa</strong></li>
                <li><a href="/login">Login</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2026 - Serralheria OS</p>
    </footer>
</body>
</html>