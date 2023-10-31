<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your App Title</title>
    <!-- Подключите здесь ваши стили, скрипты и другие ресурсы -->
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Your App</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/notes">Notes</a>
                </li>
                <!-- Добавьте другие ссылки на страницы приложения, если нужно -->
            </ul>
        </div>
    </nav>
    
    <div class="container">
        @yield('content')
    </div>
    
    <!-- Подключите здесь ваши скрипты -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
