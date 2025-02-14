<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Application</title>
    <style>
        .container { margin: 20px; }
        .nav { margin-bottom: 20px; }
        .nav a { margin-right: 15px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="nav">
            <a href="{{ url('/') }}">Greet</a>
            <a href="{{ route('task.index') }}">Tasks</a>
        </div>

        @yield('content')
    </div>
</body>
</html> 