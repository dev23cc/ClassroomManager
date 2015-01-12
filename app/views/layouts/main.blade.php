<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ClassroomManager</title>
        <link href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.1/flatly/bootstrap.min.css"
              rel="stylesheet">
        <link href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/css/bootstrap-datetimepicker.css"
              rel="stylesheet">
        <link href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/css/bootstrap-datetimepicker.css"
              rel="stylesheet">

        {{ HTML::style(asset('css/main_template.css') ) }}
    </head>
    <body>
        @include('layouts.navbar.navbar')
        <div class="container">
            @yield('content')
            <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
            <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/js/bootstrap-datetimepicker.min.js"></script>
            <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"></script>


        </div>

    </body>
</html>