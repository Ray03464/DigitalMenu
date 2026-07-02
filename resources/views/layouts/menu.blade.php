<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <title>@yield('title', 'Sandoo Kitchen Digital Menu')</title>
    <link rel="stylesheet" href="/css/site.css" />
</head>
<body>
    @yield('content')
    <script src="/js/site.js"></script>
    @stack('scripts')
</body>
</html>
