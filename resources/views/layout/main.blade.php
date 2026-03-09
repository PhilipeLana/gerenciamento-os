<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de OS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { display: flex; min-height: 100vh; background-color: #f8f9fa; }
        .sidebar { width: 250px; background: #212529; color: white; }
        .content { flex: 1; padding: 20px; }
    </style>
</head>
<body>

    <div class="sidebar p-3">
        <h4>Oficina OS</h4>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="/" class="nav-link text-white">Dashboard</a>
            </li>
            <li>
                <a href="/ordens" class="nav-link text-white">Ordens de Serviço</a>
            </li>
            <li>
                <a href="/clientes" class="nav-link text-white">Clientes</a>
            </li>
        </ul>
        <hr>
        <div class="dropdown">
            <a href="#" class="text-white text-decoration-none">Sair</a>
        </div>
    </div>

    <div class="content">
        @yield('conteudo') </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>