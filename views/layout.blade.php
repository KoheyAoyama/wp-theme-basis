<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ bloginfo('name') }}</title>
    <link rel="stylesheet" href="{{ get_template_directory_uri() }}/style.css">
</head>
<body>
    @include('header')
    <main>
        @yield('content')
    </main>
    @include('footer')
</body>
</html>