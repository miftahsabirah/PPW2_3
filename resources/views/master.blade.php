<html>
    <head>
        <title>@yield('title')</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        @section('header')
        <h1>Data Siswa SMA 01 </h1>
        @show
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>