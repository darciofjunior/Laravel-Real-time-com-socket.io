<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - {{ config('app.name') }}</title>

    <link rel="stylesheet" href="{{ url('css/app.css') }}">
</head>
<body>
    
    <div id="app" class="container mx-auto">
        @yield('content')
    </div>

    <script src="{{ url('js/app.js') }}"></script>
</body>
</html>