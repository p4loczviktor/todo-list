<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? 'Todo List' }}</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="{{ asset('/css/todo-list.css') }}" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-light bg-white border-bottom shadow">
        <div class="container py-2">
            <div class="col-12 col-md-4">
                {{ $brand }}
            </div>
            <div class="col-12 col-md-8 d-flex">
                {{ $controls }}
            </div>
        </div>
    </nav>
    <div class="container">
        {{ $slot }}
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
<footer class="bg-white border-top shadow">
    <div class="container d-flex">
        <small class="text-muted ms-auto my-2 fs-12px">&copy; {{ __('tasks.sign') }}</small>
    </div>
</footer>
</html>
