<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>{{ $title . ' - ' . config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body>

    @include('partials.header')

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                @include('partials.sidebar')
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                {{ $slot }}
            </main>
        </div>
    </div>

    @include('partials.footer')
    @livewireScripts
</body>

</html>
