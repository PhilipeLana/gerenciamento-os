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
        @if(session('success'))
    <div style="background: #d4edda; color: #155724; padding: 10px; margin-bottom: 20px;">
        {{ session('success') }}
    </div>
@endif

@if($errors->any())
    <div style="background: #f8d7da; color: #721c24; padding: 10px; margin-bottom: 20px;">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2026 - Sistema interno de Ordem de Serviços</p>
    </footer>
</body>
</html>