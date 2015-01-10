<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ClassroomManager</title>
        <link href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.1/flatly/bootstrap.min.css"
              rel="stylesheet">
        {{ HTML::style(asset('css/main_template.css') ) }}
    </head>
    <body>
        @include('layouts.navbar.navbar')
        <div class="container">
            @yield('content')
            <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
            <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
        </div>

    </body>
</html>