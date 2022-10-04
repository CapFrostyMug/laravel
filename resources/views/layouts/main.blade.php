{{-- От этого шаблона наследуются другие шаблоны --}}
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@section('title')Страница@show</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body style="margin: 0 auto; padding-top: 15px; width: 1366px; display: flex;">
<main>
    @yield('menu')
    @yield('content')
</main>
</body>
</html>
