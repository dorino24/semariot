<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="apple-touch-icon" sizes="180x180" href="/images/fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/fav/favicon-16x16.png">
    <link rel="manifest" href="/images/fav/site.webmanifest">
    <link rel="mask-icon" href="/images/fav/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Quicksand&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/47313b196d.js" crossorigin="anonymous"></script>
    <title>@yield('title','IoT Challenge')</title>
    <meta name="author" content="M Haris Humaidi, Ridho Priambodo">
</head>
<body class=".bdy">
    @include('partials.navbar')
    @yield('content')
    @include('partials.footer')
    @include('partials.script')
</body>
</html>