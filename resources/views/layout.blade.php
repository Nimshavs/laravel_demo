<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title")</title>
    @vite(['resources/css/app.css'])
    @yield("styles")
</head>
<body>
    <header class="header">
        <nav class="navbar">
            @include("navbar")
        </nav>
    </header>
    @yield("mainContent")
    
</body>
</html>