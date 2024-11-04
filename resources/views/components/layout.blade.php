<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ninja Netword</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        @if(!Request::is('/'))
            <nav>
                <h1>Ninja Network</h1>
                <a href="/ninjas">All Ninjas</a>
                <a href="/ninjas/create">Create New Ninja</a>
            </nav>
        @endif
    </header>

    <main class="container">
        {{ $slot }}
    </main>
    
</body>
</html>